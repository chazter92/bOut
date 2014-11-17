<?php

   
        
    // se crea un nuevo objeto y le pasamos el id de la película que vino por el postback
    $rating = new ratings($_POST['metrica_id'],$_POST['lugar_id']);
    
    // si en el postback se indicó la variable buscar, obtenemos los ratings, sino guardamos el voto
    isset($_POST['buscar']) ? $rating->obtenerRating() : $rating->votar();
    
    // definición de la clase
    class ratings {
        
        private $metrica_id;
        private $lugar_id;
        private $conexion;
        
        //private $data = array();
        
        // el constructor de la clase va a recibir la película
        function __construct($metrica, $lugar) {
            require_once 'config.php';
            require_once 'conexion.php';
                
            // guardamos la película en la propiedad
            $this->metrica_id = $metrica;
            $this->lugar_id = $lugar;
            $this->conexion = conectar();
            
        }


        public function obtenerRating() {
            
            // Verificamos que no exista otro salon con el mismo nombre //                
            $resultado = mysql_query("select count(punteo), sum(punteo), avg(punteo) from CALIFICACION where LUGAR_id_lugar = '".$this->lugar_id."' and METRICA_id_metrica = ".$this->metrica_id.";", $this->conexion) or die('Select fallido: ' . mysql_error());
            $numFilas = mysql_num_rows($resultado);
        if ($numFilas > 0) {
            $fila = mysql_fetch_assoc($resultado);
            $numvotos = $fila['count(punteo)'];
            $promedio = $fila['avg(punteo)'];
            $suma = $fila['sum(punteo)'];
            $redondeado = round($promedio);
            //devolvemos los datos de votacion por json a la pagina
            $data['metrica_id'] = $this->metrica_id;
            $data['lugar_id'] = $this->lugar_id;
            $data['numeroDeVotos'] = $numvotos;
            $data['votosTotales'] = $suma;
            $data['promedioExacto'] = $promedio;
            $data['promedioRedondeado'] = $redondeado;
            echo json_encode($data);
        }
        else { // caso contrario
                /*
                // cargamos los datos de la película al arreglo, con los valores por defecto
                $data['metrica_id'] = $this->metrica_id;
                $data['lugar_id'] = $this->lugar_id;
                $data['numeroDeVotos'] = 0;
                $data['votosTotales'] = 0;
                $data['promedioExacto'] = 0;
                $data['promedioRedondeado'] = 0;

                // devolvemos el objeto recién creado por JSON a la página
                echo json_encode($data);*/
            } 
        }

        public function votar() {

            // necesitamos saber qué estrella es la que se votó
            // para eso, usamos preg_match, que realiza una comparación 
            // tomando la expresión regular, la cadena de entrada (la estrella en la que hizo click) y dejando el resultado en $resultado
            preg_match('/estrella_([1-5]{1})/', $_POST['clickEstrella'], $resultado);

            // guardamos el valor de la estrella
            $votar = $resultado[1];
            
            $ID = $this->metrica_id;
            $Sitio = $this->lugar_id;
            
            mysql_query("INSERT INTO CALIFICACION(punteo, LUGAR_id_lugar, METRICA_id_metrica) values(".$votar.", ".$Sitio,$ID.", ".$ID.");", $this->conexion) or die('Consulta fallida: ' . mysql_error());
            // obtenemos el nuevo rating para enviárselo a la página
            $this->obtenerRating();
        }
    }
?>
<!DOCTYPE html>
<html>
    <script type="text/javascript">
    function ventanaNuevaCalificar(){ 
	window.open('calificar.php','Calificame!','width=350, height=610,directories = no');
    }
    </script>
    <head>
        <meta charset="UTF-8">
        <title>Calificame!</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="js/scriptcalificar.js"></script>
        <link rel="stylesheet" href="css/stylecalificar.css">
    </head>
    <?php
        require_once 'config.php';
        require_once 'conexion.php';
 
        $conexion = conectar();
            
        //variable de id_lugar que me viene en el post
        $cod = $_GET['id'];
        //$cod = 2;

        $query = mysql_query("Select nombre, METRICA_id_metrica from CAT_MET, METRICA where METRICA_id_metrica = id_metrica and CATEGORIA_id_categoria = ( select CATEGORIA_id_categoria from LUGAR where id_lugar ='$cod' );", $conexion) or die('Select fallido: ' . mysql_error());
        
        //insertar comentario
        if (isset($_POST['comentario'])) {
        if (strcmp(($_POST['comentario']), "") !== 0 ) {
            $comment = trim($_POST['comentario']);
            $usuario = trim($_POST['nombre']);
            $fecha = strftime( "%Y-%m-%d-%H-%M-%S", time() );
            
            mysql_query("INSERT INTO COMENTARIO values(null, '$usuario', '$comment','$fecha',$cod);", $conexion) or die('Consulta fallida: ' . mysql_error());
            //echo '<br><br><center>Gracias por comentar!</center>';
            unset($_POST['comentario']);
            unset($_POST['nombre']);
            //mysql_close($conexion);
        }else{
            echo '<br><br><center>ha ocurrido un error</center>';
        }
        }
        
    ?>
    <body>
        <table>
            <tr>
                <td>
                    <div class="divInfo">
                        <?php
                        $row = mysql_fetch_row($query);
                        echo '<h3>'.$row[0].'</h3>';
                        echo '<div id="'.$row[1].'" class="divValoracion" value="'.$cod.'" >';
                            echo '<div class="estrella_1 estrellasValoracion"></div>';
                            echo '<div class="estrella_2 estrellasValoracion"></div>';
                            echo '<div class="estrella_3 estrellasValoracion"></div>';
                            echo '<div class="estrella_4 estrellasValoracion"></div>';
                            echo '<div class="estrella_5 estrellasValoracion"></div>';
                            echo '<div class="votosTotales">Datos de votación</div>';
                        echo '</div> ';
                     ?>
                     </div>
                </td>
            </tr>
            <tr><td height = "30"></td></tr>
            <tr>
                <td>
                    <div class="divInfo">
                        <?php
                        $row = mysql_fetch_row($query);
                        echo '<h3>'.$row[0].'</h3>';
                        echo '<div id="'.$row[1].'" class="divValoracion" value="'.$cod.'">';
                            echo '<div class="estrella_1 estrellasValoracion"></div>';
                            echo '<div class="estrella_2 estrellasValoracion"></div>';
                            echo '<div class="estrella_3 estrellasValoracion"></div>';
                            echo '<div class="estrella_4 estrellasValoracion"></div>';
                            echo '<div class="estrella_5 estrellasValoracion"></div>';
                            echo '<div class="votosTotales">Datos de votación</div>';
                        echo '</div> ';
                     ?>
                    </div>
                </td>
            </tr>
            <tr><td height = "30"></td></tr>
            <tr>
                <td>
                    <div class="divInfo">
                        <?php
                        $row = mysql_fetch_row($query);
                        echo '<h3>'.$row[0].'</h3>';
                        echo '<div id="'.$row[1].'" class="divValoracion" value="'.$cod.'">';
                            echo '<div class="estrella_1 estrellasValoracion"></div>';
                            echo '<div class="estrella_2 estrellasValoracion"></div>';
                            echo '<div class="estrella_3 estrellasValoracion"></div>';
                            echo '<div class="estrella_4 estrellasValoracion"></div>';
                            echo '<div class="estrella_5 estrellasValoracion"></div>';
                            echo '<div class="votosTotales">Datos de votación</div>';
                        echo '</div> ';
                     ?>
                    </div>
                </td>
            </tr>
            <tr><td height = "30"></td></tr>
        </table>
        
        <form method="post" action="index.php">
        <table>
            <tr><td><h4>Tus comentarios nos interesan!</h4></td></tr>
            <tr>
                <td>
                    <textarea name="comentario" cols="40" rows="5" required="" ></textarea>
                </td>
            </tr>
            <tr>
                <td>Nombre:    <input type="text" name="nombre" required=""></td>
            </tr>
            <tr><td height = "10"></td></tr>
            <tr>
                <td>
                    <center><input type="Submit" name="Enviar" value="Comentar"/></center>
                </td>
            </tr>
        </table>
        </form>
                    <!--input type="button" value="nuevaventana" onclick="ventanaNuevaCalificar()" /-->
        
    </body>
</html>

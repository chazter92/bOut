$(document).ready(function() {  

    // iteramos todos los elementos dentro del divValoracion      
    $('.divValoracion').each(function() {
        var metrica = this;
         
        // creamos el objeto JSON que enviaremos a la página PHP
        var datos = {
            metrica_id : $(metrica).attr('id'), // este es el id que mencionamos antes  
            lugar_id : $(metrica).attr('value'), //este es el codigo del sitio
            buscar: 1 // indicamos que queremos obtener la información y no guardar un voto
        };

        // cargamos datos del servidor utilizando un pedido HTTP POST
        $.post(
            'ratings.php', // archivo que va a recibir nuestro pedido                    
            datos, // el objeto que creamos antes

            // función que se ejecutará cuando obtengamos la respuesta
            function(INFO) { // INFO son los datos que nos devuelve la página PHP

                // data es un método jQuery que nos permite asociar datos a un objeto del DOM
                $(metrica).data( 'puntaje', INFO );

                // llamamos al método que carga los valores en las estrellas y la información
                indicarVotos(metrica);
            },
            'json'
        );
    });

    // cuando pasamos el mouse por encima de las estrellas
    $('.estrellasValoracion').hover(

        // la función hover necesita que definamos dos funciones
        // una para cuando el puntero del mouse se posiciona sobre el elemento
        function() {

            // dependiendo el div en el que nos encontremos,
            // a todos los divs anteriores y al que tiene el mouse encima, les agregamos esta clase
            $(this).prevAll().andSelf().addClass('estrellaVotar');

            // a los siguientes le quitamos esta clase
            $(this).nextAll().removeClass('estrellaValoracion'); 
        },
        
        // y una para cuando el mouse deja el elemento
        function() {

            // a todos los divs anteriores y al que tenía el mouse encima, les quitamos esta clase
            $(this).prevAll().andSelf().removeClass('estrellaVotar');
            
            // llamamos al método que carga los valores originales de las estrellas
            indicarVotos($(this).attr('id'));
        }
    );

    // este método es el que guarda el voto, al hacer click sobre una estrella
    $('.estrellasValoracion').bind('click', function() {

        // obtenemos la estrella sobre la que se hizo click
        var estrella = this;

        // obtenemos la película a la que pertenece la estrella
        var metrica = $(this).parent();
        
        // creamos el objeto para enviar a la página PHP
        var datosClick = {
            clickEstrella : $(estrella).attr('class'),
            metrica_id : $(estrella).parent().attr('id'),
            lugar_id : $(estrella).parent().attr('value')
        };

        // cargamos datos del servidor utilizando un pedido HTTP POST
        $.post(
            'ratings.php', // archivo que recibe nuestro pedido
            datosClick, // datos que le enviamos a la página

            // función que se ejecuta cuando obtenemos la respuesta
            function(INFO) { // INFO son los datos que nos devolvió la página PHP

                // data nos permite asociar datos a un objeto del DOM
                metrica.data( 'puntaje', INFO );

                // llamaos al método que llena los valores
                indicarVotos(metrica);
            },
            'json'
        ); 
    });
});

// función encargada de tomar los datos que se obtuvieron de la página PHP
// y cargar las estrellas correspondientes
function indicarVotos(metrica) {

    // extraemos la información guardada el objeto DOM donde está la película
    // y creamos 3 variables para mostrar los datos
    var promedioRedondeado = $(metrica).data('puntaje').promedioRedondeado;
    var votos = $(metrica).data('puntaje').numeroDeVotos;
    var promedioExacto = $(metrica).data('puntaje').promedioExacto;            

    // buscamos la estrella de la película que tenga el número igual al promedio redondeado
    // de esa para atrás, les cargamos la clase estrellaValoración
    $(metrica).find('.estrella_' + promedioRedondeado).prevAll().andSelf().addClass('estrellaValoracion');

    // a las que la suceden (si las hubiera) le quitamos la clase (por si la tenían) para que queden vacías
    $(metrica).find('.estrella_' + promedioRedondeado).nextAll().removeClass('estrellaValoracion'); 

    // mostramos la cantidad de votos y el promedio exacto
    $(metrica).find('.votosTotales').text( votos + ' votos (' + promedioExacto + ')' );
}
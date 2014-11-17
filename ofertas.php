<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>B-Out! | Ofertas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--  jquery plguin -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- start gallery -->
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>	
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
        <!-- Comienza plugin para la lista de categorias -->
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
        <link rel="stylesheet" type="text/css" href="css/boxes.css" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <script src="js/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.dropdown.js"></script>
        <script type="text/javascript">

            $(function () {

                $('#cd-dropdown').dropdown({
                    gutter: 5
                });

            });

        </script>
        <!-- Termina plugin para lista de categorias -->


        <script type="text/javascript">
            $(function () {

                var filterList = {
                    init: function () {

                        // MixItUp plugin
                        // http://mixitup.io
                        $('#portfoliolist').mixitup({
                            targetSelector: '.portfolio',
                            filterSelector: '.filter',
                            effects: ['fade'],
                            easing: 'snap',
                            // call the hover effect
                            onMixEnd: filterList.hoverEffect()
                        });

                    },
                    hoverEffect: function () {

                        // Simple parallax effect
                        $('#portfoliolist .portfolio').hover(
                                function () {
                                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                    $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                                },
                                function () {
                                    $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                    $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                                }
                        );

                    }

                };

                // Run the show!
                filterList.init();

            });
        </script>
        <!-- Add fancyBox main JS and CSS files -->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
            });
        </script>
    </head>
    <body>
        <?php include_once('header.php'); ?>
    </div>
</div>
<!-- start slider -->
<div class="slider_bg">
    <div class="wrap">
        <div class="slider">
            <h2>Las Mejores Ofertas</h2>
            <h3>¡Solamente en B-Out encontrarás las mejores ofertas de tus sitios favoritos!</h3>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">

            <table style="margin: 0 auto; width:100%;">
                <tr>
                    <th>
						
					</th>
                <tr>
                    <th>
                        <br>
                        <br>
                        <br>						
                    </th>
                </tr>
                </tr>
            </table>
			<?php
				require_once 'config.php';
				require_once 'conexion.php';
                $conexion = conectar();
				$consulta = "SELECT fecha_inicio, fecha_fin, precio_descuento, O.descripcion, L.nombre, Ca.nombre, O.LUGAR_id_lugar, L.imagen "
							. "FROM `OFERTA` O, `LUGAR` L, `CATEGORIA` Ca "
							. "WHERE id_lugar=LUGAR_id_lugar AND CATEGORIA_id_categoria = id_categoria "
							. "ORDER BY precio_descuento DESC LIMIT 5";
							
				$ofertas = mysql_query($consulta) or die("Problemas en el select:" . mysql_error());
				$contador = 1;
				
				while ($row = mysql_fetch_array($ofertas)) {
					$id_lugar = $row[6];
					switch ($contador) {								
						case 1:
							$color = "red";
							break;
						case 2:
							$color = "green";
							break;
						case 3:
							$color = "yellow";
							break;
						case 4:
							$color = "grey";
							break;
						case 5:
							$color = "blue";
							break;
					}
					echo "<div class=box-" . $color . " style='font-size:20px'> <img src=\"images/".strtolower($row[7])."\" width=\"300px\" height=\"180px\"> ".$row[4]." (".$row[5].") Tiene Q".$row[2]." de descuento del ".$row[0]." al ".$row[1].". ".$row[3] ."  <a href=mapa.php?id=".$id_lugar."><font color=3210F0>Ir al sitio</font></a></div>";
					$contador = $contador + 1;
				}
			?>

            <br>
			<br>
            <br>

        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>

</body>
</html>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>B-Out! | Top5</title>
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
            <h2>Sitios Mejor Rankeados</h2>
            <h3>Observa el TOP 5 de tu categoria favorita</h3>
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
					
                        <?php
                        require_once 'config.php';
                        require_once 'conexion.php';

                        $conexion = conectar();
                        $categorias = mysql_query("select * from CATEGORIA") or
                                die("Problemas en el select:" . mysql_error());

                        echo "<form method=POST>";
                        echo "<select name='cd-dropdown' id='cd-dropdown' class='cd-select' >";
                        echo "<option value='-1' selected>Elija su categoria</option>";
                        while ($row = mysql_fetch_array($categorias)) {
                            echo "<option value='" . $row[0] . "' class='icon-cloudy'>" . $row[1] . "</option>";
                        }
                        echo "</select>";
                        echo "</th>";
						echo "</tr>";
						echo "<tr>";
						echo "<th>";
						echo "<br><br>";
						echo "<input type=submit class=btn value='Ver Top' name=top />";
						echo "</form>";
						echo "";
						echo "";
                        ?> 
						
                </th>
                <tr>
                    <th>
                        <br>
                        <br>
                        <br>
						<?php
                        if (isset($_POST['cd-dropdown'])) {
                            // Hacemos el select de la info //
                            require_once 'config.php';
                            require_once 'conexion.php';
                            $conexion = conectar();
                            $categoria = $_POST['cd-dropdown'];
							$consulta = "SELECT DISTINCT L.nombre, Ca.nombre, AVG(C.punteo) promedio, L.id_lugar "
										. "FROM CALIFICACION C, LUGAR L, CATEGORIA Ca "
										. "WHERE Ca.id_categoria = L.CATEGORIA_id_categoria "
										. "AND L.id_lugar = C.LUGAR_id_lugar AND Ca.id_categoria = " . $categoria 
										. " GROUP BY (C.LUGAR_id_lugar) ORDER BY promedio DESC LIMIT 5" ;
										
                            $categorias = mysql_query($consulta) or
                                    die("Problemas en el select:" . mysql_error());

                            $contador = 1;
							while ($row = mysql_fetch_array($categorias)) {
								$promedio = substr($row[2], 0, 3);
								$id_lugar = $row[3];
                                switch ($contador) {								
                                    case 1:
                                        echo "<a style=width:100% class=box-yellow href='mapa.php?id=" . $id_lugar . "'>1.		" . $row[0] . " -- " . $promedio . "</a><br><br><br><br>";
                                        break;
                                    case 2:
                                        echo "<a style=width:100% class=box-green href='mapa.php?id=" . $id_lugar . "'>2.		" . $row[0] . " -- " . $promedio . "</a><br><br><br><br>";
                                        break;
                                    case 3:
                                        echo "<a style=width:100% class=box-grey href='mapa.php?id=" . $id_lugar . "'>3.		" . $row[0] . " -- " . $promedio . "</a><br><br><br><br>";
                                        break;
                                    case 4:
                                        echo "<a style=width:100% class=box-blue href='mapa.php?id=" . $id_lugar . "'>4.		" . $row[0] ." -- " . $promedio . "</a><br><br><br><br>";
                                        break;
                                    case 5:
                                        echo "<a style=width:100% class=box-red href='mapa.php?id=" . $id_lugar . "'>5.		" . $row[0] . " -- " . $promedio . "</a><br><br><br><br>";
                                        break;
                                }
                                $contador = $contador + 1;
                            }
							if($contador == 1)
							{
								echo "<a style=width:100% class=box-grey>NO HAY CALIFICACIONES EN ESTA CATEGORIA</a>";
							}
							
                            unset($_POST['cd-dropdown']);
                        }?>			
						
                    </th>
                </tr>
                </tr>

            </table>	

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>  
			<br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
			<br>
            <br>
            <br>  
			<br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>

</body>
</html>
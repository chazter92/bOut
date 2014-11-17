<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>B-Out!</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- start gallery -->
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
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
			$(document).ready(function() {
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
	<?php include_once('header.php');?>
    
	<div class="header_btm">
		<div class="h_left">
			<h2>Mientras exista diversion, lo seguiremos haciendo!</h2>
			<h3></h3>
		</div>
		<div class="soc_icons">
			<h2>Comparte</h2>
				<ul>
					<li><a class="icon1" href="#"></a></li>
					<li><a class="icon2" href="#"></a></li>
					<li><a class="icon3" href="#"></a></li>
					<li><a class="icon5" href="#"></a></li>
					<div class="clear"></div>
				</ul>	
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<!-- start gallery  -->
			<div class="container">
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="restaurante sportbar lounge casino teatro cine discoteca bar pub varios">Todos</span></li> /
						<li><span class="filter" data-filter="restaurante sportbar lounge">Comida</span></li> /
						<li><span class="filter" data-filter="discoteca lounge restaurante">Música</span></li> /
						<li><span class="filter" data-filter="bar lounge pub">Bebidas</span></li> /
						<li><span class="filter" data-filter="cine teatro restaurante">Familia</span></li> /
						<li><span class="filter" data-filter="lounge cine teatro varios">Amigos</span></li> /
                        <li><span class="filter" data-filter="bar pub lounge discoteca casino varios">+18</span></li>
					</ul>
		<div id="portfoliolist">
			<a class="popup-with-zoom-anim" href="categoria.php?id=1">
				<div class="portfolio restaurante" data-cat="restaurante">
					<div class="portfolio-wrapper">				
							<img src="images/restaurantes/restaurantes3.jpg"  alt="Restaurantes" width = "270px" height="180px"/>
						<div class="label">
							<div class="label-text">
								<p class="text-title">Buena comida</p>
								<span class="text-category">Restaurantes</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>		
			</a>
            <a class="popup-with-zoom-anim" href="categoria.php?id=8">
				<div class="portfolio casino" data-cat="casino">
					<div class="portfolio-wrapper">			
							<img src="images/casinos/casinos3.jpg"  alt="Casinos" width = "270px" height="180px"/>
						<div class="label">
							<div class="label-text">
								<p class="text-title">Prueba tu suerte</p>
								<span class="text-category">Casinos</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="categoria.php?id=2">
				<div class="portfolio discoteca" data-cat="discoteca">
					<div class="portfolio-wrapper">			
							<img src="images/discotecas/discotecas3.jpg"  alt="Discotecas" width = "270px" height="180px"/>
						<div class="label">
							<div class="label-text">
								<p class="text-title">Para mover el cuerpo</p>
								<span class="text-category">Discotecas</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>		
			</a>
			<a class="popup-with-zoom-anim" href="categoria.php?id=3">
				<div class="portfolio bar" data-cat="bar">
					<div class="portfolio-wrapper">						
							<img src="images/bares/bares3.jpg"  alt="Bares" width = "270px" height="180px"/>
						<div class="label">
							<div class="label-text">
								<p class="text-title">El último trago</p>
								<span class="text-category">Bares</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>				
			</a>
            <a class="popup-with-zoom-anim" href="categoria.php?id=6">
				<div class="portfolio cine" data-cat="cine">
					<div class="portfolio-wrapper">			
							<img src="images/cines/cines3.jpg"  alt="Cines" width = "270px" height="180px"/>
						<div class="label">
							<div class="label-text">
								<p class="text-title">Una buena pelicula</p>
								<span class="text-category">Cines</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="categoria.php?id=5">
				<div class="portfolio pub" data-cat="pub">
					<div class="portfolio-wrapper">			
							<img src="images/pubs/pubs3.jpg"  alt="Pubs" width = "270px" height="180px"/>
						<div class="label">
							<div class="label-text">
								<p class="text-title">La noche es joven</p>
								<span class="text-category">Pubs</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="categoria.php?id=7">	
				<div class="portfolio sportbar" data-cat="sportbar">
					<div class="portfolio-wrapper">
							<img src="images/sportbars/sportbars3.jpg"  alt="Sportbars" width = "270px" height="180px"/>
						<div class="label">
							<div class="label-text">
								<p class="text-title">Vive tu pasión</p>
								<span class="text-category">Sportbars</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>			
			</a>
			<a class="popup-with-zoom-anim" href="categoria.php?id=4">
				<div class="portfolio lounge" data-cat="lounge">
					<div class="portfolio-wrapper">			
							<img src="images/lounges/lounges3.jpg"  alt="Lounges" width = "270px" height="180px"/>
						<div class="label">
							<div class="label-text">
								<p class="text-title">Entre amigos</p>
								<span class="text-category">Lounges</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="categoria.php?id=9">
				<div class="portfolio teatro" data-cat="teatro">
					<div class="portfolio-wrapper">			
							<img src="images/teatros/teatros3.jpg"  alt="Teatros" width = "270px" height="180px"/>
						<div class="label">
							<div class="label-text">
								<p class="text-title">amantes del arte</p>
								<span class="text-category">Teatros</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="categoria.php?id=10">
				<div class="portfolio varios" data-cat="varios">
					<div class="portfolio-wrapper">			
							<img src="images/varios/varios3.jpg"  alt="Varios" width = "270px" height="180px"/>
						<div class="label">
							<div class="label-text">
								<p class="text-title">De todo un poco</p>
								<span class="text-category">Varios</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>	
		</div>
	</div><!-- end container -->
	</div>
</div>
</div>
	
	<?php require_once 'config.php';
	require_once 'conexion.php';
	$conexion = conectar();
	include_once('footer.php');?>
</body>
</html>
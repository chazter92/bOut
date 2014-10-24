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
			<h2></h2>
			<h3>En entretenimiento tu mejor opción.</h3>
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
		<!-- start popup -->
		<div id="small-dialog" class="mfp-hide">
			<div class="pop_up">
			 	<h2>Lorem Ipsum is simply dummy text of the printing and industry</h2>
			 	<img src="images/zoom.jpg" title="image-name">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
				<a class="btn" href="details.php">Read more</a>
			</div>
		</div>
		
        
        <div id="small-dialog-res" class="mfp-hide">
			<div class="pop_up">
			 	<h2>RESTAURANTES</h2>
			 	<img src="images/zoom.jpg" title="image-name">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
				<a class="btn" href="details.php">Read more</a>
			</div>
		</div>
		<!-- end popup -->
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
			<a class="popup-with-zoom-anim" href="#small-dialog-res">
				<div class="portfolio restaurante" data-cat="restaurante">
					<div class="portfolio-wrapper">				
							<img src="images/pic1.jpg"  alt="Image 2" />
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
            <a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio casino" data-cat="casino">
					<div class="portfolio-wrapper">			
							<img src="images/pic7.jpg"  alt="Image 2" />
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
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio discoteca" data-cat="discoteca">
					<div class="portfolio-wrapper">			
							<img src="images/pic2.jpg"  alt="Image 2" />
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
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio bar" data-cat="bar">
					<div class="portfolio-wrapper">						
							<img src="images/pic3.jpg"  alt="Image 2" />
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
            <a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio cine" data-cat="cine">
					<div class="portfolio-wrapper">			
							<img src="images/pic7.jpg"  alt="Image 2" />
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
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio pub" data-cat="pub">
					<div class="portfolio-wrapper">			
							<img src="images/pic4.jpg"  alt="Image 2" />
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
			<a class="popup-with-zoom-anim" href="#small-dialog">	
				<div class="portfolio sportbar" data-cat="sportbar">
					<div class="portfolio-wrapper">
							<img src="images/pic5.jpg"  alt="Image 2" />
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
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio lounge" data-cat="lounge">
					<div class="portfolio-wrapper">			
							<img src="images/pic6.jpg"  alt="Image 2" />
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
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio teatro" data-cat="teatro">
					<div class="portfolio-wrapper">			
							<img src="images/pic7.jpg"  alt="Image 2" />
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
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio varios" data-cat="varios">
					<div class="portfolio-wrapper">			
							<img src="images/pic7.jpg"  alt="Image 2" />
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
	<?php include_once('footer.php');?>
</body>
</html>
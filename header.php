
<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];


echo '<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="images/logo.png" alt=""/></a></h1>
		</div>
		<div class="h_right">
			<ul class="menu">
				<li class="'; if($first_part=="index.php" || $first_part==""){echo "active"; }else {echo "noactive";} echo'"><a href="index.php">home</a></li>
				<li class="'; if($first_part=="about.php"){echo "active"; }else {echo "noactive";} echo'"><a href="about.php">about</a></li>
				<li class="'; if($first_part=="portfolio.php"){echo "active"; }else {echo "noactive";} echo'"><a href="portfolio.php">portfolio</a></li>
				<li class="'; if($first_part=="blog.php"){echo "active"; }else {echo "noactive";} echo'"><a href="blog.php">blog</a></li>
				<li class="'; if($first_part=="contact.php"){echo "active"; }else {echo "noactive";} echo'"><a href="contact.php">contact</a></li>
				<li class="'; if($first_part=="mapa.php"){echo "active"; }else {echo "noactive";} echo'"><a href="mapa.php">Mapa</a></li>
			</ul>
			<div id="sb-search" class="sb-search">
				<form>
					<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
					<input class="sb-search-submit" type="submit" value="">
					<span class="sb-icon-search"></span>
				</form>
			</div>
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( \'sb-search\' ) );
			</script>
			<!-- start smart_nav * -->
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="index.php">Home</a></li>
	                <li class="nav-item"><a href="about.php">About</a></li>
	                <li class="nav-item"><a href="portfolio.php">Portfolio</a></li>
	                <li class="nav-item"><a href="blog.php">Blog</a></li>
	                <li class="nav-item"><a href="contact.php">Contacto</a></li>
	                <li class="nav-item"><a href="mapa.php">Mapa</a></li>					

	                <div class="clear"></div>
	            </ul>
	        </nav>
	        <script type="text/javascript" src="js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
	</div>';
    
  ?>
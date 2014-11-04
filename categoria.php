<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

<?php 	
	require_once 'config.php';
	require_once 'conexion.php';
	 
	$conexion = conectar();
	$id_categoria = trim($_POST['id']);
	$categorias=mysql_query("select * from categoria where id_categoria = ".$id_categoria,$conexion) or
	  die("Problemas en el select:".mysql_error());
	  
	  if($categoria=mysql_fetch_array($categorias)){
		  $titulo = $categoria['nombre'];		  
	  }else{
		  header('Location: index.php');
	  }
?>;

<title>B-Out! | <?php echo $titulo;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<?php include_once('header.php');?>
</div>
</div>
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
	<div class="slider">
		<h2><?php echo $titulo;?></h2>
		<h3>Los mejores sitios los encuentras aquí</h3>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
			<!-- start about -->
			<div class="about">
					 <div class="cont-grid-img img_style">
			     		<img src= <?php echo "\"" . strtolower($titulo) . "/" . $categoria['imagen'] . "\"";?> alt="">
			     	</div>
			       <div class="cont-grid">
					       	<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
					       	<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum  dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s, </p>
					       	<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
			      	</div>
			      	<div class="clear"></div>
			    	<div class="about-p">
				    	<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum  dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s, </p>
						<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit</p>
						<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						<div class="read_more">
							<a class="btn" href="details.html">read more</a>
						</div>
					</div>
			</div>
			<!-- end about -->
		</div>
	</div>
</div>
</div>
	<?php include_once('footer.php');?>
</body>
</html>
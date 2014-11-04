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
	$id_categoria = trim($_GET['id']);
	if($_GET['id']){
	$categorias=mysql_query("select * from CATEGORIA where id_categoria = ".$id_categoria,$conexion) or
	  die("Problemas en el select:".mysql_error());
	  
	  if($categoria=mysql_fetch_array($categorias)){
		  $titulo = $categoria['nombre'];		  
	  }else{
		  header('Location: index.php');
	  }
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
			     		<img src= <?php echo "\"images/" . strtolower($titulo) . "/" . $categoria['imagen'] . "\"";?> alt="">
			     	</div>
			       <div class="cont-grid">
					       	<p class="para">
                            <?php echo $categoria['descripcion'];?>
                            </p>
			  </div>
			      	<div class="clear"></div>
			    	<div class="about-p">
				    	
						<div class="read_more">
							<a class="btn" href="top.php">Ver sitios</a>
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
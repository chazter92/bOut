<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>B-Out! | Mapa</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
<script type="text/javascript">
    function ventanaNuevaCalificar(id){ 
	window.open('calificar.php?id='+id,'Calificame!','width=350, height=610,directories = no');
    }
 </script>
<script type="text/javascript">

var points = [
	<?php
		$id_categoria = trim($_GET['cat']);
		$id_lugar = trim($_GET['id']);
		if($_GET['id']){
			$consulta = "select * from LUGAR where id_lugar = ".$id_lugar;
		}else if($_GET['cat']){
			$consulta = "select * from LUGAR where CATEGORIA_id_categoria = ".$id_categoria;
		}else{
			$consulta = "select * from LUGAR";
		}
		
		require_once 'config.php';
		require_once 'conexion.php';
		
		$conexion = conectar();
		$lugares = mysql_query($consulta) or die("Problemas en el select:" . mysql_error());
		
		$i = 0;
		while ($lugar = mysql_fetch_array($lugares)) {
			if($i > 0){
				echo ",";	
			}
			echo "\n['".$lugar['nombre']."', ".$lugar['latitud'].", ".$lugar['longitud'].", 'mapa.php?id=".$lugar['id_lugar']."']";
			$i = $i + 1;			
		}
	?>
    ];


function setMarkers(map, locations) {
	for (var i = 0; i < locations.length; i++) 
		{
		var place = locations[i];
		var myLatLng = new google.maps.LatLng(place[1], place[2]);
		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: place[0],
			url: place[3]
		});
		
		google.maps.event.addListener(marker, 'click', function() {
			window.location.href = this.url;
		});
    }
}

function initialize(){
	var place = points[0];
	var mapProp = {
	  center:new google.maps.LatLng(place[1],place[2]),
	  zoom:13,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	setMarkers(map, points);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>
<body>
	<?php include_once('header.php');?>
</div>
</div>
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
	<div class="slider">
		<h2>Sitios</h2>
		<h3>Mientras exista diversion, lo seguiremos haciendo!</h3>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content" >
			<!-- start map -->
            
          
         <table >
                  <tr>
                    <td width="100%"><div id="googleMap" style="width:100%; height:500px"></div></td>
                  </tr>
         
                  <tr>
                   <?php
					  
					  	if($_GET['id']){
							$consulta = "select L.*, C.nombre categoria from LUGAR L inner join CATEGORIA C on(L.CATEGORIA_id_categoria = C.id_categoria) WHERE id_lugar = ".$id_lugar;
							$lugares = mysql_query($consulta) or die("Problemas en el select:" . mysql_error());
							$lugar = mysql_fetch_array($lugares);
							$titulo = $lugar['nombre'];
							if($lugar['categoria'] == "VARIOS"){
								$cuerpo = "¿Cansado de la rutina y de visitar los mismos lugares cada vez que sales con tus amigos? Seguro no has visitado ".$lugar['nombre']." ya que es uno de los mejores sitios de la ciudad para salir a despejar tu mente y salir del estrés de cada día. Te invitamos a que lo conozcas, seguro no te arrepentirás.</br> <strong>Teléfono: </strong>".$lugar['telefono']."</br> <strong>Web: </strong> ".$lugar['url']."</br>";
							}else{
								switch(mt_rand(1,3)){
									case 1:
										$cuerpo = "Uno de los mejores ".strtolower($lugar['categoria'])." que te proponemos es ".$lugar['nombre']." aca podras encontrar uno de los mejores ambientes para poder pasarla bien con tus amigos, además de instalaciones cómodas y los mejores precios para pasarla en grande<br> <strong>Teléfono:</strong>".$lugar['telefono']."</br> <strong>Web: </strong>".$lugar['url']."</br>";
									break;
									case 2:
										$cuerpo = "Entre nuestros sitios más exclusivos se encuentra ".$lugar['nombre'].". Es uno de los mejores ".strtolower($lugar['categoria'])." que puedas encontrar ya que se distingue por su atención al cliente y la calidad de los servicios que ofrecen con los precios más competitivos del mercado local</br> <strong>Teléfono:</strong>".$lugar['telefono']."</br> <strong>Web: </strong>".$lugar['url']."</br>";
									break;
									case 3:
										$cuerpo = "¿Buscando uno de los mejores ".strtolower($lugar['categoria'])."? Seguro que quedarás complacido cuando visites ".$lugar['nombre']." te la pasarás en grande cuando conozcoas sus instalaciones y el ambiente que invita a pasarla increíble. Tus amigos y tú disfrutarán de sus servicios y seguro que regresarán a visitarlo cada vez que puedan.</br> <strong>Teléfono:</strong> ".$lugar['telefono']."</br> <strong>Web: </strong>".$lugar['url']."</br>";
								}
							}
							$imagen = $lugar['imagen'];	
						}else if($_GET['cat']){
							$consulta = "select * from CATEGORIA where id_categoria = ".$id_categoria;
							$lugares = mysql_query($consulta) or die("Problemas en el select:" . mysql_error());
							$lugar = mysql_fetch_array($lugares);	
							
							$titulo = $lugar['nombre'];
							$cuerpo = $lugar['descripcion'];
							$imagen = strtolower($lugar['nombre'])."/".strtolower($lugar['nombre']).mt_rand (1,5).".jpg";
						}else{
							$titulo = "Los mejores sitios de la ciudad";
							$cuerpo = "En B-Out nos esforzamos día a día para proponerte una nueva alternativa de diversión. No ahorramos esfuerzos para llevarte a los mejores sitios de la ciudad, con el mejor ambiente, la mejor compañía, el mejor servicio y los mejores precios. En B-Out mientras exista diversión ¡Lo seguiremos haciendo!";	
							$imagen = "logo.png";
						}
					  
					  
				   ?>
                  
                  <td valign="top" width="100%">
                    	<div>
                        <h3><?php echo $titulo;?></h3>
						<p class="para"><?php echo $cuerpo;?></p>
                        <?php if($_GET['id']){
								 echo '<a onClick="ventanaNuevaCalificar('.$id_lugar.')" class="btn">Calificar y comentar</a>';	
							  }
						?>
                        <img src="images/<?php echo strtolower($imagen);?>" width="600px" height="290px">
                        
                        </div>
                     
                    </td>
                    
                  </tr>
         </table>
          

			<!-- end map -->
		</div>
	</div>
</div>
</div>
	<?php include_once('footer.php');?>
</body>
</html>

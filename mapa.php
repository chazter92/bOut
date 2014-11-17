<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>B-Out! | About</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>


<script type="text/javascript">

function initialize()
{



var mapProp = {
  center:new google.maps.LatLng(16,-90.5),
  zoom:7,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);



<?php include_once('marcadores.php');?>




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
		<h2>Bout!</h2>
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
            
          
          
          
         <table>
                  <tr>
                  
                    <th align="center" width="50%">
                      <?php include_once('form_mapa.php');?>
                    </th>
                  
        
        
                    <th width="50%"><div id="googleMap" style="width:900px;height:500px;"></div></th>
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

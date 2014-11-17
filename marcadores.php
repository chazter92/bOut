<?php

require_once 'config.php';
require_once 'conexion.php';

$conexion = conectar();
$lugares = mysql_query("select * from LUGAR where CATEGORIA_id_categoria = 2") or
die("Problemas en el select:" . mysql_error());


while ($row = mysql_fetch_array($lugares)) {

echo "var point".$row[0]." = new google.maps.LatLng(".$row[2].", ".$row[3].");\n";
echo "var myMarker".$row[0]." = new google.maps.Marker({";
echo "position: point".$row[0].",";
echo "map: map,";
echo "title:\"".$row[1]."\"});\n";

}

?>






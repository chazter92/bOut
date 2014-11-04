<?php
function conectar () {
$db_con = mysql_connect (DB_SERVER,DB_USER,DB_PASS);
if (!$db_con) return false;
if (!mysql_select_db (DB_NAME, $db_con)) return false;
mysql_set_charset('utf8'); 
mysql_query("SET NAMES 'utf8'");
return $db_con;
}
?>
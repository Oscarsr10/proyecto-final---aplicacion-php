<?php
$conexion = mysql_connect('localhost','Serrano','1234');
if(!$conexion) {
	die('No es posible conectar con la base de datos'.mysql_error());
}
mysql_select_db('adm_hos',$conexion);
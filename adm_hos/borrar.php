<?php
include "function/conexion.php";
$nombre=$_POST['nombre'];
$registro=mysql_query("SELECT DNI from enfermero WHERE Nombre='$nombre'",$conexion)
or die("Problemas al realizar la consulta:".mysql_error());

if($reg=mysql_fetch_array($registro))
{
mysql_query("DELETE FROM enfermero WHERE Nombre='$nombre'",$conexion)
or die("Problemas al realizar la consulta:".mysql_error());
echo "se han eliminado los datos";
}else{

echo "problema al eliminar los datos";

}
?>
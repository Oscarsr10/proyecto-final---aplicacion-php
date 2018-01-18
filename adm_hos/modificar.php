<?php
include "function/conexion.php";

mysql_query("UPDATE enfermero set Apellido='$_POST[cnuevo]' where Apellido='$_POST[cviejo]'",$conexion)
or die(mysql_error());
echo "Actualizacion correcta";
?>
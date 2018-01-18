<HTML>
<TITLE> Paginacion Registros</TITLE>
<body>
<center>
</center>
<?php Include("function/header.php"); ?>
<?php Include("function/menu.php"); ?>
 
    <div class="container">
		<br>
		<br>
		<br>
		<br>
      <div class="starter-template">
<?php
if (isset($_REQUEST['pos']))
$inicio=$_REQUEST['pos'];
else
$inicio=0;
?>
<?php
include 'function/conexion.php';
$query = "select * from enfermero limit $inicio,2";
$result = mysql_query($query);
echo "<center><h2><b>LISTADO DE ENFERMEROS";
echo "<br>";
echo "<br>";
echo "<table width='500' border='0'>";
echo "<tr bordercolor='#CCFFOO' bgcolor='#FAAC58'>
	<td ><b>DNI</b></td>
	<td ><b>Nombre</b></td>
	<td ><b>Apellido</b></td>
	<td ><b>Hospital_idHospital</b></td></tr>";
	$impresos=0;
while($fila=mysql_fetch_array($result)){
$impresos++;
echo "<tr bgcolor='#F2F5A9'>";
echo "<td>$fila[DNI] </td>";
echo "<td>$fila[Nombre] </td>";
echo "<td>$fila[Apellido] </td>";
echo "<td>$fila[Hospital_idHospital] </td>";
echo "</tr>";
}
echo "</table></center>";

mysql_close($conexion);
if($inicio==0)
echo "Anteriores";
else
{
$anterior=$inicio-2;
echo "<a href=\"resultados.php?pos=$anterior\">Anteriores</a>";
}
if ($impresos==2)
{$proximo=$inicio+2;
echo "<a href=\"resultados.php?pos=$proximo\"></br>Siguientes</a>";
}
else
echo "Siguientes";
  
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
</body>
</html>
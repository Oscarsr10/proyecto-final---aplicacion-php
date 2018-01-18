
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Altas</title>
</head>
  <body>
		
  <?php Include("function/header.php"); ?>
<?php
		if(!$_POST){
		?>
  <?php Include("function/menu.php"); ?>
 
    <div class="container">
		<br>
		<br>
      <div class="starter-template">
	   
        <h1>Altas: tabla Enfermero</h1>
		<form id="categoria" name="categoria" method="post" action="categoria_add.php">
		DNI
		<input class="form-control" name="dni" type="text" id="dni" value
		="" size=8 />
		Nombre
		<input class="form-control" name="nombre" type="text" id="nombre" value
		="" size=20 />
		Apellido
		<input class="form-control" name="apellido" type="text" id="apellido" value
		="" size=20 />
		Hospital_idHospital
		<input class="form-control" name="idhospital" type="text" id="idhospital" value
		="" size=4 /><br>
		<input type="submit" name="categoria" id="categoria" value="Agregar">
     </div>
	</form>
    </div><!-- /.container -->
	<?php
	}
	else{
	

include 'function/conexion.php';

  $dni=$_POST["dni"];
  $nombre=$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $idhospital=$_POST["idhospital"];
   $resul=mysql_query("INSERT INTO enfermero values($dni,'$nombre','$apellido',$idhospital)",$conexion);
  $numerror=mysql_errno($conexion);
  $descripcionerror=mysql_error($conexion);
  if($numerror ==0){ echo "registro insertado";}
  else{
  echo "numero de error : $numerror***<br>****descripcion error: $descripcionerror";
  }
  mysql_close($conexion);

}
?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
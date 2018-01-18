<?php
include 'function/conexion.php';
$sql = "SELECT * FROM enfermero";
$res = mysql_query($sql,$conexion);



?>
DOCTYPE html>
<html lang="en">
  <?php Include("function/header.php"); ?>

  <body>
  <?php Include("function/menu.php"); ?>
    <div class="container">
		<br>
		<br>
      <div class="starter-template">
        <h1>Listado</h1>
		<a href="categoria_add.php" class="btn btn-large btn-success">Agregar</a>
		<br>
		<br>
      <table class="table table-striped">
	  <tr>
		<td>DNI</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Hospital_idHospital</td
		</tr>
			<?php while ($row = mysql_fetch_array($res)){ ?>
							<tr>
							<td><?php echo $row['DNI']; ?> </td>
							<td><?php echo $row['Nombre']; ?> </td>
							<td><?php echo $row['Apellido']; ?> </td>
							<td><?php echo $row['Hospital_idHospital']; ?> </td>
							</tr>
			<?php } ?>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
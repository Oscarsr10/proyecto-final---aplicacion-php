<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bajas</title>
</head>
  <body>
  <?php Include("function/header.php"); ?>

  <?php Include("function/menu.php"); ?>
 
    <div class="container">
		<br>
		<br>
      <div class="starter-template">
	   
        <h1>Bajas: tabla Enfermero</h1>
		<hr>
<center> <form method="post" action="borrar.php" >
<p>Nombre de Enfermero a dar de baja: <input name="nombre" type="text"></p>
<p><input type="submit" name="baja" value="Dar de baja"></p>
</form>
</center>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
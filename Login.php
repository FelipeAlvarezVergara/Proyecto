<?php
	
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "solids1";
$dbname = "proyecto_bd";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
	die("No hay conexion: ".mysqli_connect_error());
}

$nombre = $_POST['txtuser'];
$pass = $_POST['txtpass'];

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre = '".$nombre."'and pass = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	echo "Bienvenido" .$nombre;
}
else if($nr == 0)
{
	echo "Usuario no existe.";
}

?>

<!DOCTYPE html>
	<html>
	     <head>
	     </head>
	     <body>
	          <h1>LINKS</h1>
	          <h3>Lista</h3>
	          <ul>
	          	<li><a href="https://www.offidocs.com/index.php/desktop-programming-tools-online/eclipse-online-ide-java-c-php">Opcion 1</li>
	          	<li><a href="https://colab.research.google.com/notebooks/intro.ipynb">Opcion 2</li>
	          	<li><a href="https://edu.google.com/intl/es-419/products/classroom/?modal_active=none">Opcion 3</li>	
	          </ul>
	     </body>
	</html>
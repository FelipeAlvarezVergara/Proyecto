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
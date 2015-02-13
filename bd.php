$user="usuario";
$pass="contraseña";
$server="localhost";
$bd="formulario";

$conn=mysql_connect("$server", "$user", "$pass");
mysql_select_db($bd);

?>

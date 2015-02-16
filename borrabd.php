<?php
include_once "bd.php";

$id = $_GET['Id'];
$sql="DELETE FROM datos WHERE Id='$id'";
mysql_query($sql);
echo "Datos Borrados Correctamente <br/>";
?>
<a href="index.php"><button type="submit">Volver Atras</button></a>

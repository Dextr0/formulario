<?php
include_once "bd.php";

$sql="DELETE FROM datos WHERE Id='$_POST[Id]'";

mysql_query($sql);
echo "Datos Borrados Correctamente <br/>";
?>
<a href="index.php"><button type="submit">Volver Atras</button></a>

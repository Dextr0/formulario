<?php
include_once "bd.php";

$sql="UPDATE datos SET nombre='$_POST[nombre]',apellido='$_POST[apellido]',edad='$_POST[edad]' 
WHERE Id='$_POST[Id]'";

mysql_query($sql);
echo "Datos Actualizados Correctamente <br/>";
?>
<a href="index.php"><button type="submit">Volver Atras</button></a>

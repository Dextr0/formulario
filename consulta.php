<?php

include_once "bd.php";

$sql = "SELECT * FROM datos WHERE nombre='$_POST[nombre]'";

$res=mysql_query($sql);
while ($fila=mysql_fetch_assoc($res))

{
    echo " $fila[nombre] $fila[apellido] $fila[edad] <a href=modificar.php?id=$fila[id]> modificar</a><br/>";
}

?>

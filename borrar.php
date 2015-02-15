<?php

include_once "bd.php";

$id = $_GET['Id'];

$sql="SELECT * FROM datos WHERE Id={$id} ";

$res=mysql_query($sql);
$fila=mysql_fetch_array($res);

?>
<html>
<body>
<form action="borrabd.php" method=POST>
Nombre: <input type="text" name="nombre" value="<?php echo "$fila[nombre]" ?>"/> <br />
Apellido: <input type="text" name="apellido" value="<?php echo "$fila[apellido]" ?>"/> <br />
Edad: <input type="text" name="edad" id="edad" value="<?php echo "$fila[edad]"?>"/> <br />
    
        <input type="hidden" name="Id" value="<?php echo "$fila[Id]" ?>"></br>
        <button type="submit">Borrar Datos</button>
        </form>
</body>
</html>



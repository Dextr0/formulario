<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Consulta en la BBDD</title>
    
</head>
<body>
<form action="consulta.php" method="POST">
    <h1>¿Que deseas buscar?</h1>
    Nombre: <input type="text" name="nombre" id="nombre" /> <br />
<!--    Apellido: <input type="text" name="apellido" id="apellido" /> <br />
    Edad: <input type="text" name="edad" id="edad" /> <br /> -->
    
        <input type="hidden" name="consulta" value="datos"></br>
    <button type="submit">Buscar</button> </form> <a href="index.php"><button type="submit">Volver Atras</button></a>
</body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba de GitHub Forma gráfica</title>
    <link rel="stylesheet" href="base.css">
</head>
<body>
    <h2>Introduzca los datos que se le piden a continuación</h2>
    <form action="ITCA/capturarDatos.php" method="post">
        <label for="nombre">Nombre del usuario:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
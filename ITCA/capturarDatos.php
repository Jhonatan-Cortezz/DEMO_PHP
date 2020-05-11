<?php
    if(isset($_POST['nombre']) && isset($_POST['direccion'])){
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];

        echo "Bienvenido $nombre a la prueba de Git en forma gráfica<br> Su dirección es: $direccion";
    }
?>
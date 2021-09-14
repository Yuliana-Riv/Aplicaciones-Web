<?php
    echo $nombre=$_POST['nombre'];
    echo $apellido=$_POST['apellido'];
    echo $ciudad=$_POST['ciudad'];
    echo $edad=$_POST['edad'];
    echo $telefono=$_POST['telefono'];
    echo $correo=$_POST['correo'];
    echo $estado_civil=$_POST['estado_civil'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Yukehi :)</title>
</head>
<body>

<h1>FORMULARIO DE YUKEHI:)</h1>
<form method="post">

<label>Nombre: </label><input type="text" name="nombre"><br>
<label>Apellido: </label><input type="text" name="apellido"><br>
<label>Edad: </label><input type="number" name="edad"><br>
<label>Dirección de correo electrónico: </label><input type="text" name="correo"><br>
<label>Ciudad: </label><select name="ciudad">
    <option>Empalme</option>
    <option>Guaymas</option>
    <option>Hermosillo</option>
    <option>Cd. Juárez</option>
    <option>Culiacán</option>
    <option>Mazatlan</option>
    <option>Guadalajara</option>
    <option>Nueva York</option>
</select>
<br>
<label>Número Telefónico: </label><input type="text" name="telefono"><br>
Estado civil:<br>
<select name="estado_civil">
    <option>Soltero(a)</option>
    <option>Casado(a)</option>
</select>
<button> Enviar </button>
</form>


</body>
</html>
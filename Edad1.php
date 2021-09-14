<?php

$enviado=false;

if(isset($_GET["name1"])){
    $enviado=true;
    $r= $_GET;

    $name1= $r["name1"];
    $edad1= $r["edad1"];
    $nombre2= $r["nombre2"];
    $edad2= $r["edad2"];

    if($name1== '' || $nombre2==''){
        $resultado= "Escriba el nombre de la primera persona: ";
    }
    elseif($edad1>$edad2){
        $resultado= $name1." es más grande que ". $nombre2;
    }
    elseif($edad2>$edad1){
        $resultado= $nombre2." es más joven que ". $name1;
    }
    elseif($edad1 == $edad2){
        $resultado= $name1." y ".$nombre2." son de la misma edad" ;
    }
    

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparación de edades</title>
</head>
<body>
    <h1>Comparación de edades de Yukehi :)</h1>

    <form method="get" action="edad1.php">

        <label for=""> Introduzca el nombre de la persona 1:</label>
        <input type= "text" name= "name1">

        <br>

        <label for=""> Introduzca la edad de la persona 1:</label>
        <input type= "number" name= "edad1">

        <br>
        <br>

        <label for=""> Introduzca el nombre de la persona 2:</label>
        <input type= "text" name= "nombre2">

        <br>

        <label for=""> Introduzca la edad de la persona 2:</label>
        <input type= "number" name= "edad2">

        <br>

        <button type="submit" >Enviar</button>
    </form>

    <?php if($enviado){ ?>
    <hr>

    <h2> <?= $resultado; ?>  </h2>
    

    <?php } ?>
</body>
</html>


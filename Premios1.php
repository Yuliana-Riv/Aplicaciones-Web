<?php

$enviado=false;

if( isset( $_GET["operacion"] ) ){ 
    $enviado=true;
    $r = $_GET;  
    
    $ope = $r["operacion"];
    


switch ($ope) {
    case '1':
        $resultado= "Has ganado una piedra";
        break;
        case '2':
            $resultado= "Has ganado una cabra";
            break;
            case '3':
                $resultado= "Has ganado un carro del año";
                break;
                
                    default:
                    $resultado = "Elige una de las puertas";   
                    break;
    
}



    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Catafixia de Yukehi :)</title>
</head>
<body>
    

<h1>La Catafixia de Yukehi :)</h1>

<form  method="get" action="Premios1.php" >


    <label for="">Elige la puerta de tu agrado:</label> <br>
    <select name="operacion">
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>

    <button type="submit"  >Enviar</button>

</form>

<?php if($enviado){ ?>

<hr>       
<h2> Hola, tu premio es: ! </h2>
<h3><?php  echo $resultado;  ?></h3>


<?php } ?> 




</body>
</html>
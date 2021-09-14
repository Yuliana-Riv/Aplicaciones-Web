<?php

$enviado=false;

if( isset( $_GET["operacion"] ) ){ 
    $enviado=true;
    $r = $_GET;  
    
    $ope = $r["operacion"];
    $numero1 = $r["numero1"];
    $numero2 = $r["numero2"];
    $resultado=0;


switch ($ope) {
    case '+':
        $resultado= $numero1 + $numero2;
        break;
        case '-':
            $resultado= $numero1 - $numero2;
            break;
            case '*':
                $resultado= $numero1 * $numero2;
                break;
                case '/':
                    $resultado= $numero1 / $numero2;
                    break;
                    default:
                    $resultado = "No se puede realizar la operación solicitada";   
                    break;
    
}



    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

</head>
<body>



<h1>Calculadora de Yukehi :)</h1>

<form  method="get" action="calculator1.php" >


    <label for="">Numero 1 a usar</label>
    <input type="text" name="numero1" >

    <br>

    
    <label for="">Numero 2 a usar</label>
    <input type="text" name="numero2" >

    <br>

    <label for="">Elige el calculo a realizar:</label> <br>
    <select name="operacion">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>

    <button type="submit"  >Enviar</button>

</form>

<?php if($enviado){ ?>

<hr>       
<h2> El resultado es:  </h2>
<h3><?php  echo $resultado;  ?></h3>


<?php } ?> 

</body>

</html>


<?php

    $numero =$_POST['numPrimo'];
    $resultado =$_POST['resultado'];
    $contPrimo=0;

    for($contador = 1; $contador <= $numero ; $contador++){
        if($numero %$contador == 0){
            $contPrimo = $contPrimo + 1;
        }
    }
    if($numero == 1 || $contPrimo == 2){
        $resultado="Es primo";
        //echo $resultado;
    }else{
        $resultado="No es primo";
        //echo "no es primo";
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form class="form" action="Ejercicio2_Asig8.php" method="post">
            </br>
            <p>Ingrese el número</p>
            </br>
            <input class="input__valor"
            type="text" 
            name="numPrimo" 
            require>
            </br>
            <input class="input__boton"
            type="submit" 
            value="¿Es primo?">
            </br>
            <input class="input__resultado"
            type="text"
            name="resultado"
            value="<?php echo $resultado ?>">
            </br>
            </br>
        </form>
    </div>
</body>
</html>

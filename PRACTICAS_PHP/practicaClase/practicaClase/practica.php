<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*$variable = 1;
    while ($variable < 6){
        echo "estamos ejecutando el bucle while <br>";

        $variable ++;
    }

    $variable = 1;
    do{
        echo "Estamos ejecutando el bucle HACER MIENTRAS <br>";
        $variable ++;
    }while ($variable < 6)

    */

    for ($i = 0 ; $i <=12 ; $i++ ){
        echo  "5 / $i =". 5  / $i . "<br>"; 

        if($i = 0){
            echo "No se puede dividir entre 0";
           continue;
           echo  "5 / $i =". 5  / $i . "<br>"; 
    }


    ?>
</body>
</html>
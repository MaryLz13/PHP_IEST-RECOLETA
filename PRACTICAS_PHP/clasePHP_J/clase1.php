<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    /*
        //Asignacion de valores a variables
        $codigo = "000005";
        echo "Codigo original: " .$codigo ."<br/>";
        //Aplicamos settype

        settype($codigo, 'integer');
        echo "El nuevo valor de $codigo es: " .$codigo ."<br/>";

        $nuevoCodigo=sprintf ("%06d", $codigo ,+ 1);
        //impresion del nuevo codigo
        echo "El valor de $codigo es: " .$nuevoCodigo ."<br/> <br/> <br/>";


        //Generar 10 codigos de forma correlativa a partir del codigo 000005


        $codigo = "000005";
        echo "Codigo original: " .$codigo ."<br/>";
        settype($codigo, 'integer');
        $nuevoCodigo=sprintf ("%05d", $codigo ,+ 1);
        echo "Los 10 codigos autogenerados son: ";
        for ($i =1; $i<=10;$i++){
            $nuevoCodigo =sprintf ("%05d", $codigo+ $i);
            echo $nuevoCodigo ."<br/>";
        }
        */
        error_reporting(0);
        $nota=$_POST['txtNota']*1;
        $mostrarNota= 'nota Correcta';


        if(empty($nota))
            //echo "Ingresar nota";
            $mostrarNota = "<p>Ingrese Nota</p>";
        if(!is_integer($nota))
            //echo "Nota Incorrecta";
            $mostrarNota = "<p>Nota Incorrecta</p>";
        else if($nota <0 || $nota >20)
            //echo "El rango de notas es de 0 a 20";
            $mostrarNota = "<p>Rango de nota es de 0 a 20</p>";
    ?>
        <div class="container">
        <form action="" method="POST">
            <h1>VALIDAR NOTA</h1>
            <label for="">Ingresar nota</label>
            <input type="text" name="txtNota" value="<?php echo $_POST['txtNota']; ?>">
            <p><?php echo $mostrarNota; ?></p>
            <input type="submit" value="validar">
        
        </form>
        </div>
        

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="post">

            <p>INGRESE 2 VALORES PARA HALLAR LA OPERACIÓN (a+b)*(a-b)</p>
            <h1>VALOR A</h1>
                <input 
                    class="input__valor"
                    type="text" 
                    name="num1" 
                    id=""
                >
          
            <h1>VALOR B</h1>
            
                <input 
                    class="input__valor"
                    type="text" 
                    name="num2" 
                    id=""
                >
                <br>
                <input 
                    type="submit" 
                    value="Calcular" 
                    name="enviar"
                >
                <br>
         
        </form>

        <?php
            class ejercicio1{

                function operacion($num1, $num2){
                    $this->num1 = $num1;
                    $this->num2 = $num2;

                    $resultado=($num1+$num2)*($num1-$num2);
                    echo "<div class ='resultado'>";
                    echo "El resultado de (" .$num1 ." + " .$num2 .") * (" .$num1 ." - " .$num2 .") es: ".$resultado;
                }
            }

            $ejercicio1 = new ejercicio1();

            if(isset($_POST["num1"])){

                $ejercicio1->operacion($_POST["num1"], $_POST["num2"]); 
            
            }
        ?>
    </body>
</html>
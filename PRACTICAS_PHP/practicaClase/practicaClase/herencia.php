
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="herencia.css">
    <title>Document</title>
</head>
<body>
    <p>CLASE PADRE Y CLASES HIJAS</p>

    <?php

    echo "<div class ='mostrar'>";
    echo "<h1>Clase PADRE</h1>";
    class calculadora{
        var $tipo;
        var $valor1;
        var $valor2;

        function calculadora(){
            $this -> tipo = "básica";
            $this -> valor1 = "";
            $this -> valor2 = "";
        }

        function sumar($valor1,$valor2){
            $resultado = $valor1 + $valor2;
            echo "El resultado de la suma de " .$valor1 ." y " .$valor2 ." es: " .$resultado ."<br>";
        }

        function restar($valor1,$valor2){
            $resultado = $valor1 - $valor2;
            echo "El resultado de la resta de " .$valor1 ." y " .$valor2 ." es: " .$resultado ."<br>";
        }

        function multiplicar($valor1,$valor2){
            $resultado = $valor1 * $valor2;
            echo "El resultado de la multiplicación de " .$valor1 ." y " .$valor2 ." es: " .$resultado ."<br>";
        }

        function dividir($valor1,$valor2){
            $resultado = $valor1 / $valor2;
            echo "El resultado de la división de " .$valor1 ." y " .$valor2 ." es: " .$resultado ."<br><br><br><br>";
            //echo "<h2>Los resultados de arriba son metodos heredados de la clase padre</h2>";
        }   
    }

    class calculadora_hija1 extends calculadora{
        
        function potencia($valor1){
            $resultado =pow($valor1,2);
            echo "El resultado de la potencia de " .$valor1 ." es " .$resultado ."<br>";
        }

        function raiz_cuadrada($valor1){
            $resultado =sqrt($valor1);  
            echo "El resultado de la raiz de " .$valor1 ." es " .$resultado ."<br> <br> ";
            echo "<h1>Clase HIJA 1</h1>";
            
        }
    }

    class calculadora_hija2 extends calculadora{

        function raiz_cubica($valor1){
            $resultado = pow($valor1, 1/3);
            echo "El resultado de la raiz cubica de " .$valor1 ." es " .$resultado ."<br> <br>";
            echo "<h1>Clase HIJA 3</h1>";
        }
    }

    class calculadora_hija3 extends calculadora{

        function resto($valor1, $valor2){
            $resultado = $valor1 % $valor2;
            echo "El resultado del resto de " .$valor1 ." y " .$valor2 ." es " .$resultado ."<br> <br>";
            
        
        }
    }

    $operacion = new calculadora();
    $operacion ->sumar(3,3);                   ////metodos heredados de la clase padre calculadora
    $operacion ->restar(4,2);                   
    $operacion ->multiplicar(7,3);
    $operacion ->dividir(8,2);


    $operacion = new calculadora_hija1();
    $operacion ->sumar(5,3);                   ////metodos heredados de la clase padre calculadora
    $operacion ->restar(5,3);                   
    $operacion ->multiplicar(5,3);
    $operacion ->dividir(5,3);
    $operacion ->potencia (2);                //metodos de la funcion calculadora_hija1
    $operacion ->raiz_cuadrada(4);            //metodos de la funcion calculadora_hija1

    $operacion = new calculadora_hija2();
    $operacion ->sumar(6,4);                    ////metodos heredados de la clase padre calculadora
    $operacion ->restar(15,3);
    $operacion ->multiplicar(5,8);
    $operacion ->dividir(20,2);
    $operacion ->raiz_cubica (1000);            //metodos de la funcion calculadora_hija2

    $operacion = new calculadora_hija3();
    $operacion ->sumar(9,8);                   //metodos heredados de la clase padre calculadora
    $operacion ->restar(6,1);                   
    $operacion ->multiplicar(4,3);
    $operacion ->dividir(7,2);
    $operacion ->resto (17,3);                  //metodos de la funcion calculadora_hija3
?>

</body>
</html>
<?php
    class ejercicio1{

        function operacion($num1, $num2, $resultado){
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->resultado = $resultado;
            $resultado=($num1+$num2)*($num1-$num2);
            echo $resultado;
        }
            

    }

?>
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

    class operacion{
        public $cantidadUno = 0;
        public $cantidadDos = 0;
        public $resultado = 0;
        
        function __construct($intCant1, $intCant2){
            $this -> cantidadUno = $intCant1;
            $this-> cantidadDos = $intCant2;
        }

        public function getSuma(){
            $this -> resultado = $this ->cantidadUno + $this -> cantidadDos;
            return $this->resultado;
        }
    }

    ?>
</body>
</html>
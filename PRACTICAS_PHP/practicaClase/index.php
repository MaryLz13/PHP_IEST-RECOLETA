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
    /*class Gato{
        var $color;
        var $raza;
        var $tamaño;
        var $nombre;

        function Gato(){
            $this->color ="negro";
            $this->raza = "";
            $this->tamaño = "mediano";
            $this->nombre = "";
        }

        function Correr(){
            echo "Estoy corriendo";
            echo "<br>";
        }
        function Duerme(){
            echo "Estoy durmiendo, no molestar" . "<br>";
        }
        function Come(){
            echo "Estoy comiendo un ratón" ."<br>";
        }
        
        function establecer_raza($Traza, $nombreF){
            $this->raza = $Traza;
            //$this->nombre = $nombreF;
            echo "Soy un gato de raza: " . $Traza . " y me llamo: ". $nombreF ."<br>";
        }
    
        function establecer_nombre($nombreM){
            $this->nombre = $nombreM;
            echo "Yo soy un gato macho de nombre: " . $nombreM . "<br>";
        }
    }
    
    $gato1 = new Gato();
    $gato1 ->Duerme();

    

    $gato1 = new Gato();
    $gato1 ->Correr();
    $gato1 ->establecer_raza("angora", "Lili");
    $gato1 ->establecer_nombre("Luis");

    */


    class Heroes{
        var $nombre;
        var $poder;
        var $planeta;
        var $edad; 

        function Heroes(){
            $this->nombre = "";
            $this->poder = "";
            $this->planeta = "";
            $this->edad = "";

        }

        function datos_heroe1($nombreH , $poder1 , $planeta1, $edad1){
            $this->nombre = $nombreH;
            $this ->poder = $poder1;
            echo "Yo soy el heroe llamado: " . $nombreH . "<br>";
            echo "-tengo el poder de: " . $poder1 . "<br>";
            echo "-vengo del planeta: " . $planeta1 . "<br>";
            echo "-mi edad es: " . $edad1 . "<br> <br>";
        }
        function datos_heroe2($nombreH, $poder2 , $planeta2, $edad2){
            $this->nombre = $nombreH;
            echo "Yo soy el heroe llamado: " . $nombreH . "<br>";
            echo "-tengo el poder de: " . $poder2 . "<br>";
            echo "-vengo del planeta: " . $planeta2 . "<br>";
            echo "-mi edad es: " . $edad2 . "<br> <br>";
        }
        function datos_heroe3($nombreH, $poder3 , $planeta3, $edad3){
            $this->nombre = $nombreH;
            echo "Yo soy el heroe llamado: " . $nombreH . "<br>";
            echo "-tengo el poder de: " . $poder3 . "<br>";
            echo "-vengo del planeta: " . $planeta3 . "<br>";
            echo "-mi edad en mi planeta es: " . $edad3 . "<br> <br>";
        }
    }

    $heroe1 = new Heroes();
    $heroe1 -> datos_heroe1 ("Iro Man" , "fuerza sobrehumana" , "tierra", "40");
    
    $heroe2 = new Heroes();
    $heroe2 -> datos_heroe2 ("SpiderMan" , "super fuerza y ser como una araña" , "tierra", "20");

    $heroe3 = new Heroes();
    $heroe3 -> datos_heroe3 ("Thor" , "fuerza, agilidad " , "Asgart", "542");
    ?>
</body>
</html>
<?php
/*
    class persona{
        var $nombre;
        var $sexo;
        var $edad;

        function persona(){
            $this->nombre = "";
            $this->sexo = "varón";
            $this->edad = 35;
        }

        function profesion(){
            echo "Soy un buen programador, ";
        }

        function dibujante(){
            echo "me gusta dibujar personajes <br>";
        }

        function logico(){ 
            echo "Responde a la siguiente pregunta de sentido común: <br>";
            echo "una pareja de recien casados espera en la puerta 
                  de la iglesia cerrada, ¿Como se casaron? <br>";
        }

        private function nombre_p(){
            echo "mi nombre es Juan";
        }
      
        function nombre_persona(){
            $this->nombre_p();
        }

       
    }

    $persona1 = new persona ();
    $persona1 ->profesion();
    $persona1 ->dibujante();
    $persona1 ->logico();
    //$persona1 ->nombre_p();
    $persona1 ->nombre_persona();
 
    */

    for ($i = 0 ; $i <=12 ; $i++ ){
        echo  "5 / $i =".  5 / $i . "<br>"; 

        if($i == 0){
            echo "No se puede dividir entre 0";
           continue;
           echo  "5 / $i =". 5  / $i . "<br>"; 
        }
    }

?>
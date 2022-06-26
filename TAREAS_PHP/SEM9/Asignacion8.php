<?php

    class Telefono{
        public $marca;
        public $modelo;
        protected $precio;
        protected $alambrico = true;
        protected $comunicacion;

        public function __construct($marca,$modelo){
            $this->marca = $marca;
            $this->modelo= $modelo;
            $this->comunicacion = ($this->alambrico) ? "Alambrico" : "Inalambrico";
        }

        public function llamar(){
            echo ("<p>El telefóno suenaaaa: Riiiiiing!!!!!!</p>");
        }

        public function info_tel(){
            echo "<ul>
                    <li>Marca: " .$this->marca ."</li>
                    <li>Modelo: " .$this->modelo ."</li>
                    <li>Comunicacion: " .$this->comunicacion ."</li>
                  </ul>";
        }
    }

    class Celular extends telefono{
        public $color;
        public $tamaño;
        protected $alambrico = false;


        public function llamar_cel(){
            echo ("<p>El celular suenaaaa: Riiiiiing Rooong!!!!!!</p>");
        }

        public function __construct($marca,$modelo){
            parent :: __construct($marca,$modelo);
        }

        public function select_color($color){
            $this->color = $color;
            echo ("<p>El celular es de color : ".$color ."</p>");
        }

        public function tamañoCel($tamaño){
            $this->tamaño = $tamaño;
            echo ("<p>El celular es de color : ".$tamaño ."</p>");
        }
        public function setPrecio($precio){
            $this->precio = $precio;
        }
        public function getPrecio(){
            echo ("El precio del celular es " .$this ->precio .".00 soles");
        }
        //public function 
        
    }

    class SmarthPhone extends Celular{
        public $alambrico = false;
        public $internet = true;

        public function llamar_SmarthPhone(){
            echo ("<p>El smarthPhone suenaaaa: ...You make it look like it´s magic...!!!!!! (música) </p>");
        }
        public function __construct($marca, $modelo){
            parent ::__construct($marca, $modelo);
        }
        public function info_tel(){
            echo ("<ul>
                    <li>Marca: " .$this->marca ."</li>
                    <li>Modelo: " .$this->modelo ."</li>
                    <li>Comunicacion: " .$this->comunicacion ."</li>
                    <li>Dispositivo con acceso a internet</li>
                  </ul>");
        }

    }


    echo "<h1>EVOLUCIÓN DEL TELÉFONO</h1>";

    echo "<h2>Teléfono:</h2>";
    $tel_antig = new Telefono("Panasonic","KX-TS500LXB");
    $tel_antig ->llamar();
    $tel_antig ->info_tel();

    echo "<h2>Celular:</h2>";
    $celular = new Celular("Nokia","110");
    $celular ->llamar_cel();
    $celular ->info_tel();
    $celular ->select_color("Negro");
    $celular ->tamañoCel("1,77 pulgadas");
    $celular ->setPrecio(79);
    $celular->getPrecio();

    echo "<h2>SmathPhone:</h2>";
    $smarthPhone = new SmarthPhone("Huawei","P20 Lite");
    $smarthPhone ->llamar_SmarthPhone();
    $smarthPhone ->info_tel();



?>
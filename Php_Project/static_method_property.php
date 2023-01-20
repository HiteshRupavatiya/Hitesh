<?php
    class Greetings{
        public static function welcome(){
            echo "Hello Wrold!"."\n";
        }

        public function __construct(){
            self::welcome();
        }
    }
    class Hello extends Greetings{
        public static function welcome(){
            echo "Hello From Hello"."\n";
            parent::welcome();
        }
        public function __construct(){
            self::welcome();
        }
        public function message(){
            Greetings::welcome();
        }
    }

    new Greetings();
    new Hello();

?>

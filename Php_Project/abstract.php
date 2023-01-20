<?php
    abstract class Car{
        public $name;

        public function __constructor($name){
            $this->name = $name;
        }

        abstract function printInfo() : string;
    }

    class Audi extends Car{
        public function printInfo() : string{
            return "hello from Audi cars"."\n";
        }
    }

    class Bmw extends Car{
        public function printInfo() : string{
            return "hello from Bmw cars"."\n";
        }
    }

    class Volvo extends Car{
        public function printInfo() : string{
            return "hello from Volvo cars"."\n";
        }
    }

    $audi = new Audi();
    echo $audi->printInfo();
    $bmw = new Bmw();
    echo $bmw->printInfo();
    $volvo = new Volvo();
    echo $volvo->printInfo();

?>

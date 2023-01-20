<?php
    class Fruit{
        public $fruitName;
        public $color;

        public function __construct($fruitName,$color){
            $this->fruitName = $fruitName;
            $this->color = $color;
        }

        public function getFruitName(){
            return $this->fruitName;
        }
        public function getColor(){
            return $this->color;
        }

        public function setFruitName($fruitName){
            $this->fruitName = $fruitName;
        }
        public function setColor($color){
            $this->color = $color;
        }

        public function getInfo(){
            echo __CLASS__;
        }

        public function printInfo(){
            return "Fruit Name is : $this->fruitName\n
            Fruit Color is : $this->color";
        }
    }

    class Purchase extends Fruit{
        public $quantity;
        public $price;

        public function __construct($fruitName,$color,$quantity,$price){
            parent::__construct($fruitName,$color);
            $this->quantity = $quantity;
            $this->price = $price;
        }

        public function getInfo(){
            echo "\n";
            echo parent::getInfo();
            echo "\n";
            echo __CLASS__;
        }

        public function printCatalog(){
            echo Fruit::printInfo();
            echo "\nFruit Quantity is : $this->quantity\n
            Fruit Price is : $this->price\n
            Total Price is : "."".$this->price*$this->quantity;
        }
    }
    $obj1 = new Purchase("apple","red",10,50);
    $obj1->printCatalog();
    $obj1->getInfo();

?>

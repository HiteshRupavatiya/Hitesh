<?php
    interface Animal{
        public function animalSound();
    }

    class Cat implements Animal{
        public function animalSound(){
            echo "Hello from Cat";
        }
    }

    class Dog implements Animal{
        public function animalSound(){
            echo "Hello from Dog";
        }
    }

    class Mouse implements Animal{
        public function animalSound(){
            echo "Hello from Mouse";
        }
    }

    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();
    $animals = array($cat,$dog,$mouse);

    foreach($animals as $animal){
        echo $animal->animalSound()."\n";
    }

?>

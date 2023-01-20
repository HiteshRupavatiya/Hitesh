<?php
    final class Organization{
        public $name;
        public $place;
        public $address;

        public function __construct($name,$place,$address){
            $this->name = $name;
            $this->place = $place;
            $this->address = $address;
        }
    }

    class School extends Organization {
        // Final Class Organization cannot Inherited because it is Final
    }
    
?>

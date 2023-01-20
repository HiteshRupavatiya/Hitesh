<?php
    define("NAME","Hitesh");
    class GoodBye{
        const LEAVING_MESSAGE = "Bye Bye";
        public function printConstant(){
            echo NAME."\n";
            echo self::LEAVING_MESSAGE;
        }
    }
    $obj = new GoodBye;
    $obj->printConstant();
?>

<?php
    trait message1{
        public function msg1()
        {
            echo "Hello From Message 1 Trait";
        }
        abstract function foo();
    }

    trait message2{
        public function msg2(){
            echo "Hello From Message 2 Trait";
        }
        abstract function foo1();
    }

    class Welcome{
        use message1;
        public function foo()
        {
            echo "Hello From Welcomw 1";
        }
        public function foo1()
        {
            echo "Hello From Welcomw 1";
        }
    }

    class Welcome2{
        use message1 , message2;
        public function foo()
        {
            echo "Hello From Welcome 2";
        }
        public function foo1()
        {
            echo "Hello From Welcomw 2";
        }
    }

    $obj = new Welcome();
    $obj->msg1();
    echo "\n";
    $obj->foo();
    echo "\n";
    $obj1 = new Welcome2();
    $obj1->msg1();
    echo "\n";
    $obj1->foo();
    echo "\n";
    $obj1->msg2();

?>

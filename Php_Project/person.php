<?php
    class Person{
        public $firstName;
        protected $lastName;
        public $mobile;
        private $password;
        
        public function __construct($firstName,$lastName,$mobile,$password){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->mobile = $mobile;
            $this->password = $password;
        }

        public function __destruct(){
            echo "\nDestructor Called";
        }

        public function getFirstname(){
            return $this->firstName;
        }
        public function getLastname(){
            return $this->lastName;
        }
        public function getMobile(){
            return $this->mobile;
        }
        public function getPassword(){
            return $this->password;
        }

        public function setFirstname($firstName){
            $this->firstName = $firstName;
        }
        public function setLastname($lastName){
            $this->lastName = $lastName;
        }
        public function setMobile($mobile){
            $this->mobile = $mobile;
        }
        protected function setPassword($password){
            $this->password = $password;
        }

        public function printInfo(){
            echo "Person Firstname is : $this->firstName\n
            Person Lastname is : $this->lastName\n
            Person Mobile Number is : $this->mobile\n
            Person Password is : $this->password";
        }
    }

    $person = new Person("abc","xyz",9906767345,"cvggfggh");
    $person->printInfo();
?>

<?php
class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this -> name = $name;
        $this -> age = $age;
    }
    public function introduce() {
        echo "My name is {$this -> name}. My age is {$this -> age}";
    }
}

class Tom extends Person {
    public function sayHello(){
        echo "Hello World <br>";
    }
}

$tom = new Tom("Tom", "29");
$tom -> sayHello();
$tom -> introduce();

?>
<?php
class simpleclass{
    public $x ='hello <br>';

    public function display(){
        echo $this -> x;
    }
}
$show =new simpleclass();
 $show ->display();


// /////////
class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
  
  $apple = new Fruit();
  $banana = new Fruit();
  $apple->set_name('Apple');
  $banana->set_name('Banana');
  
  echo $apple->get_name();
  echo "<br>";
  echo $banana->get_name();

// fopen('test','x');
// fopen('test','x');
// unlink('test');
// fopen('file','r+');


 ?>

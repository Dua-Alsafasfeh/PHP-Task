<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return "fruit_name: ".$this->name;
  }
  function get_color() {
    return "fruit_color: ".$this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo $apple->get_color();

echo "<br><hr>";

echo "name: ".$apple->name="orange"."<br>";
echo "color: ".$apple->color="orange";

echo "<br><hr>";

echo $apple->get_name();
echo $apple->get_color();
?>
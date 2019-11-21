<!DOCTYPE html>
<html>
<body>

<?php
class wild_animals {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The wild_animals is {$this->name} and the color is {$this->color}."; 
  }
}


class pet_animals extends wild_animals {
  public function message() {
    echo "Am I a wild_animals or a pet_animals? "; 
  }
}

$pet_animals = new pet_animals("tiger", "gray");
$pet_animals->message();
$pet_animals->intro();
?>
 
</body>
</html>
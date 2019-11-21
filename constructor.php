
<?php
class car {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function __destruct(){
    echo "The car is {$this->name}.";
  }
  function get_name() {
    return $this->name;
  }
}

$vovo = new car("vovo");
echo $vovo->get_name();
?>
 
</body>
</html>

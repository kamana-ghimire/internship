<!DOCTYPE html>
<html>
<body>

<?php
class student {
  // Properties
  public $name;
  public $roll_no;
  public $age;
  public $rank;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_roll_no($roll_no) {
    $this->roll_no = $roll_no;
  }
  function get_roll_no() {
    return $this->roll_no;
  }
  function set_age($age) {
    $this->age = $age;
  }
  function get_age() {
    return $this->age;
  }
  function set_rank($rank) {
    $this->rank = $rank;
  }
  function get_rank() {
    return $this->rank;
  }
}

$kamana = new student();
$kamana->set_name('kamana');
$kamana->set_roll_no("1");
$kamana->set_age("2");
$kamana->set_rank("3");
echo "Name: " . $kamana->get_name();
echo "<br>";
echo "roll_no: " .  $kamana->get_roll_no();
echo"<br>";
echo "age: " . $kamana->get_age();
echo "<br>";
echo "rank: " .  $kamana->get_rank();
?>
 
</body>
</html>
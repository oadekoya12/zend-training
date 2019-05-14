<?php
// Class definition
// declare(strict_types = 1);
class Automobile
{
    // Declare  properties
    public $fuel;
    protected $engine;
    private $transmission;
}
class Car extends Automobile
{
    // Constructor
    public function __construct(){
        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    }
    public function setparam($fuel,$engine,$transmission = 4){
      $this->fuel = $fuel;
      $this->engine = $engine;
      $this->transmission = $transmission;
    }
    public function __toString(){
      return var_export($this, TRUE);
    }
}
$car = new Car();
$car->setparam('Regular','1.8L');
echo $car;
echo PHP_EOL;

$car->setparam('Deluxe','5.0', '6');
echo $car;
echo PHP_EOL;

$car->setparam('Deluxe');


try {
    echo $car;
}
catch (ArgumentCountError $e) {
  echo '***********************';
  echo $e->getMessage();
  echo $e->getCode();
}
catch (Exception $e) {
  echo '***********************';
  echo $e->getMessage();
}

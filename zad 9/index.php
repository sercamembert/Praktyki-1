<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Car {
    public $make;
    public $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function start() {
        echo "The car is starting!\n";
    }
}

$toyotaCamry = new Car("Toyota", "Camry");

echo "Car Information:\n";
echo "Make: " . $toyotaCamry->make . "\n";
echo "Model: " . $toyotaCamry->model . "\n";

$toyotaCamry->start();
echo"<br><br>";
class SportsCar extends Car {
    public $topSpeed;

    public function __construct($make, $model, $topSpeed) {
        parent::__construct($make, $model);
        $this->topSpeed = $topSpeed;
    }
}

$porsche911 = new SportsCar("Porsche", "911", 200);

echo "\nSports Car Information:\n";
echo "Make: " . $porsche911->make . "\n";
echo "Model: " . $porsche911->model . "\n";
echo "Top Speed: " . $porsche911->topSpeed . " km/h\n";

$porsche911->start();
echo"<br><br>";
$fordFocus = new Car("Ford", "Focus");

echo "\nAdditional Car Information:\n";
echo "Make: " . $fordFocus->make . "\n";
echo "Model: " . $fordFocus->model . "\n";

?>

</body>
</html>
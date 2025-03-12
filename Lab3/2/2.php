<?php
class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    public $weight;


    public function __construct($brand, $model, $year, $weight, $description = null) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight = $weight;

        if ($description !== null) {
            $this->description = $description;
        }
    }

    public function getInfo() {
        return "{$this->brand} {$this->model} ({$this->year})";
    }


    public function getWeight($inKilograms = false) {
        if ($inKilograms) {
            return $this->weight / 1000 . " kg";
        } else {
            return $this->weight . " g";
        }
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }
}

$bicycle1 = new Bicycle("Bianchi Oltre", "Bianchi", 2021, 8500);
$bicycle2 = new Bicycle("Cannodale Synapse", "Cannodale", 2020, 7800, "New bicycle");


echo $bicycle1->getInfo() . "<br>";
echo "Weight: " . $bicycle1->getWeight() . "<br>";
echo "Weight in kilograms: " . $bicycle1->getWeight(true) . "<br><br>";

echo $bicycle2->getInfo() . "<br>";
echo "Weight: " . $bicycle2->getWeight() . "<br>";
echo "Weight in kilograms: " . $bicycle2->getWeight(true) . "<br>";

<?php

interface Vehicle
{
    public function startEngine();
    public function stopEngine();
}


class Car implements Vehicle
{

    private $make;
    private $model;
    private $year;


    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }


    public function getMake()
    {
        return $this->make;
    }

    public function setMake($make)
    {
        $this->make = $make;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function start()
    {
        echo "Car started.<br>";
    }

    public function displayInfo()
    {
        echo "Car Info: {$this->make}, {$this->model}, {$this->year}<br>";
    }

    public function startEngine()
    {
        echo "Engine started.<br>";
    }

    public function stopEngine()
    {
        echo "Engine stopped.<br>";
    }


    public function getDescription()
    {
        return "This is a car.";
    }
}


class ElectricCar extends Car
{

    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity)
    {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }


    public function getBatteryCapacity()
    {
        return $this->batteryCapacity;
    }

    public function setBatteryCapacity($batteryCapacity)
    {
        $this->batteryCapacity = $batteryCapacity;
    }


    public function charge()
    {
        echo "The car is charging. Battery capacity: {$this->batteryCapacity} kWh<br>";
    }


    public function getDescription()
    {
        return "This is an electric car with a battery capacity of {$this->batteryCapacity} kWh.";
    }
}

$car = new Car("ferrari", "Ferrari f80", 2020);
$car->start();
$car->displayInfo();
$car->startEngine();
$car->stopEngine();

$electricCar = new ElectricCar("Ford Mustang", "Model 3", 2020, 75);
$electricCar->start();
$electricCar->displayInfo();
$electricCar->charge();
echo $electricCar->getDescription();

<?php
class Student
{

    public $name;
    public $surname;
    public $country;

    private $tuition;
    protected $indexNumber;


    public function __construct($name, $surname, $country)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->country = $country;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }


    public function helloWorld()
    {
        return "Hello World!<br>";
    }

    protected function helloFamily()
    {
        return "Hello Family!<br>";
    }


    private function helloMe()
    {
        return "Hello me!<br>";
    }


    private function getTuition()
    {
        return $this->tuition;
    }

    public function setTuition($amount)
    {
        $this->tuition = $amount;
    }
}


class PartTimeStudent extends Student
{
    public function helloParent()
    {
        return $this->helloFamily();
    }
}

$student = new Student("Arpana", "Kumal", "Nepal");
$partTimeStudent = new PartTimeStudent("Nayeon", "Im", "South Korea");


$student->setTuition(5000);
echo $student->helloWorld() . PHP_EOL;

echo $partTimeStudent->helloWorld() . PHP_EOL;
echo $partTimeStudent->helloParent() . PHP_EOL;

<?php 

// This is an important class

class Caculator
{
    // This is a property
    private $firstValue; 
    private $secondValue;
 
    public function setFirstValue(float $firstValue)
    {
        $this->firstValue = $firstValue;
        return $this;
    }
 
    public function getFirstValue(): float
    {
        return $this->firstValue;
    }

    public function setSecondValue(float $secondValue)
    {
        $this->secondValue = $secondValue;
        return $this;
    }

    public function getSecondValue(): float
    {
        return $this->secondValue;
    }

    public function sumMath()
    {
        return $this->firstValue + $this->secondValue;
    }

    public function mulMath()
    {
        return $this->firstValue * $this->secondValue;
    }

}
 
// Instantiate an object from the class Caculator
$caculator =(new Caculator())
->setFirstValue(99)
->setSecondValue(200);

echo 'Value 1: '.$caculator->getFirstValue().
    ', Value 2: '.$caculator->getSecondValue()."<br />";
echo 'Value 1 + Value 2 = '.$caculator->sumMath()."<br />";
echo 'Value 1 x Value 2 = '.$caculator->mulMath()."<br />";
// EOF
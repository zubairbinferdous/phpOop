<?php
// poliymorphism
// -- method overloading
// -- method overriding
// Overriding

// method overriding
class ParentClass {

    public $a;
    public $b;

    function __construct($num1=0, $num2=0) {
        $this->a = $num1;
        $this->b = $num2;
    }

    public function sum()
    {
        return 'this is from parent class ' . ($this->a + $this->b);
    }

    public function sub($param1, $param2)
    {
        return 'this is from parent class ' . ($param1 - $param2);
    }
}




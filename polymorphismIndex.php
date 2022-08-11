<?php
    include './parentClass.php';

    class ChildClass extends ParentClass {

        // override
        // public function sum()
        // {
        //     $result = $this->a - $this->b;
        //     return $result;
        // }

        // overloading
        // public function sub($param1, $param2, $param3)
        // {
        //     return 'this is from child class ' . ($param1 - $param2 + $param3);
        // }
    }


    $childObj = new ChildClass();

    // echo $childObj->sum();
    echo $childObj->sub(50, 20, 10);
<?php
// Interface
// -- interface keyword use for create a interface class
// -- cannot declare any properties in the interface class
// -- cannot create any instances of the interface class
// -- not need to add abstract keyword for declare any methods in the interface class (by default abstract methods)
// -- cannot create any public function with definitions in the interface class
// -- inherit by using the implements keyword
// -- multiple implements possible

// Overriding
// Static keyword
// Traits

interface StructureClassA {
    // CRUD
    function create();
    function update();
    function show();
    function delete();
}

interface StructureClassB {
    // CRUD
    function sum();
    function sub();
}

class ProductController implements StructureClassA, StructureClassB {

    public function create()
    {
        return 'this is product create method';
    }
    public function update()
    {
        return 'this is product update method';
    }
    public function show()
    {
        return 'this is product show method';
    }
    public function delete()
    {
        return 'this is product delete method';
    }
    public function sum()
    {
        return 'this is product sum method';
    }
    public function sub()
    {
        return 'this is product sub method';
    }
}

$obj = new ProductController;
echo $obj->delete();
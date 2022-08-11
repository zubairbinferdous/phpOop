<?php
// static keyword;
// -- static property
// -- static method

class ProductClass {
    public static $name = 'Apple';

    public static function studentInfo()
    {
        return 'Name: Rafikul Islam, University: DIU';
    }

    public static function dateFormat($date)
    {
        $date = date_create($date);
        $date = date_format($date, "d/m/Y");
        return $date;
    }
}

// echo ProductClass::$name;
// echo ProductClass::studentInfo();

// $obj = new ProductClass;
// echo $obj->name;


class  WorkingClass {
    public function productList()
    {
        $data['name'] = 'apple';
        $data['price'] = 200;
        $data['expire_date'] = ProductClass::dateFormat('2022-12-30');

        return $data;
    }

    public function productUpdate()
    {
        $data['name'] = 'apple';
        $data['price'] = 200;
        $data['expire_date'] = ProductClass::dateFormat(date('Y-m-d'));

        return $data;
    }
}

$obj = new WorkingClass;
print_r($obj->productList());
<?php
// Traits

// trait BkashPayment {

//     public function bkashPayment()
//     {
//         return 'Bkash Payment successful';
//     }
// }

// trait NogodPayment {

//     public function nododPayment()
//     {
//         return 'Nogod Payment successful';
//     }
// }

// trait NexusPayment {

//     public function nexusPayment()
//     {
//         return 'Nexus Payment successful';
//     }
// }




// class StudentCourseEnroll {
//     use BkashPayment;
//     use NogodPayment;
//     use NexusPayment;

//     public function enrollCourse()
//     {
//         return 'Student Course Enrollment done';
//     }
// }

// $obj = new StudentCourseEnroll();
// $obj->bkashPayment();
// echo $obj->enrollCourse();



require_once './ProductListTraits.php';
require_once './ProductInfoTraits.php';

class Product {
    // use ProductListTraits;
    // use ProductInfoTraits;
    use ShowTraits;
    use CreateTraits;
    use UpdateTraits;
    use DeleteTraits;

    // CRUD
    // public function show()
    // {
    //     # code...
    // }

    // public function create()
    // {
    //     # code...
    // }

    // public function update()
    // {
    //     # code...
    // }

    // public function delete()
    // {
    //     # code...
    // }
}

class Service {
    use ShowTraits;
    use CreateTraits;
    use UpdateTraits;
    use DeleteTraits;
}

$obj = new Product;
// $var = $obj->productList();
$var = $obj->productInfo();

foreach ($var as $key => $value) {
    echo $value['id'] . ' ' . $value['title'] .'<br>';
}
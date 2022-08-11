<?php

    trait ProductInfoTraits {

        public function productInfo()
        {
            $sql = "SELECT * FROM banners WHERE id = 1";
            $con = mysqli_connect('localhost', 'root', '', 'portfolio_db');
            $result = mysqli_query($con, $sql);
            
            return $result;
        }

    }
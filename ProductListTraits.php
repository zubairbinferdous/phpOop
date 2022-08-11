<?php

    trait ProductListTraits {

        public function productList()
        {
            $sql = "SELECT * FROM banners";
            $con = mysqli_connect('localhost', 'root', '', 'portfolio_db');
            $result = mysqli_query($con, $sql);
            
            return $result;
        }

    }
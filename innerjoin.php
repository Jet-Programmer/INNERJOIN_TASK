<?php
    $table1 = array(
        array("customerID"=> 1, "customerName"=> "John", "Country"=> "USA"),
        array("customerID"=> 2, "customerName"=> "Emily", "Country"=> "UK"),
        array("customerID"=> 3, "customerName"=> "Alex", "Country"=> "Canada"),
        array("customerID"=> 4, "customerName"=> "Sophie", "Country"=> "Belgium"),
    );

    $table2 = array(
        array("orderID"=> 1001, "customerID"=> 1, "Product"=> "Laptop"),
        array("orderID"=> 1002, "customerID"=> 2, "Product"=> "Smartphone"),
        array("orderID"=> 1003, "customerID"=> 1, "Product"=> "Headphones"),
        array("orderID"=> 1004, "customerID"=> 4, "Product"=> "Television"),
    );
    echo "<pre>";
    function inner_join($table1, $table2){
        $join = array();
        foreach ($table1 as $value=>$x){
            foreach ($table2 as $service=>$y){
                if ($x["customerID"] == $y["customerID"]) {
                    $join = array_merge($x, $y);
                    echo print_r($join);
                    echo "<br>";
                    }
                }
            }
    }
    echo print_r(inner_join($table1, $table2));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        text-align: center;
    }

    table,
    th,
    td {
        border-collapse: collapse;
        width: 2%;
    }

    tr {
        border-bottom: 1px solid #ddd;
    }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 450px;">
        <h4 class="text-center mb-3">Joined Table</h4>
        <?php
            echo "<pre>";
            if ($_SERVER["REQUEST_METHOD"]=="POST"){
                $orderID = $_POST["orderID"];
                $orderCustomerID = $_POST["orderCustomerID"];
                $Product = $_POST["Product"];
                $customerCustomerID = $_POST["customerCustomerID"];
                $customerName = $_POST["customerName"];
                $Country = $_POST["Country"];

                $table1 = array(array("customerID"=>"$orderCustomerID", "orderID"=>"$orderID", "Product"=>"$Product"));
                $table2 = array(array("customerID"=>"$customerCustomerID", "customerName"=>"$customerName", "Country"=>"$Country"));

                function inner_join($table1, $table2){
                    $result = array();
                    foreach ($table1 as $x){
                        foreach ($table2 as $y){
                            if ($x["customerID"] === $y["customerID"]) {
                            $result[] = array_merge($x, $y);
                                    }
                                }
                    }
                    return $result;
                }
                $joinedTable = inner_join($table1, $table2);
                print_r($joinedTable);
            }
?>
    </div>
</body>

</html>
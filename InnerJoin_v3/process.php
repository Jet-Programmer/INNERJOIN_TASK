<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            text-align: center;
        }
        table, th, td {border-collapse: collapse;
            width: 10%;}


        tr {
            border-bottom: 1px solid #ddd;}
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 500px;">
    <h4 class="text-center mb-3">Request Information <span class="badge rounded-pill bg-warning">In Progress</span></h4>
   
    <?php
    require_once("db.php");

    echo "<pre>";

    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $orderID = trim($_POST["orderID"]);
        $customerID = trim($_POST["customerID"]);
        $Product = trim($_POST["Product"]);
        $customerName = trim($_POST["customerName"]);
        $country = trim($_POST["Country"]);

        if (empty($orderID) && empty($customerID) && empty($Product) && empty($customerName) && empty($country)){
            die("All Fields are required");
        }else {}

            $stmt = $pdo->prepare("INSERT INTO request_info1 (orderID, customerID, Product, customerName, country) VALUES (?, ?, ?, ?, ?)");
        try {
            $stmt->execute([$orderID, $customerID, $Product, $customerName, $country]);
            echo "<script>alert('Request Successful.')";
        } catch (PDOException $e) {
        if ($e->getCode() == 200) { // duplicate email
             echo "<script>alert('You are all set now!');</script>";
         } else {}
}

    }
?>
<form action="receipt.php">
   <table>
        <tr>
            <th>CustomerID</td>
            <th>OrderID</td>
            <th>Name</td>
            <th>Country</td>
            <th>Product</td>
        </tr>
        <tr>
            <td><?php echo $customerID; ?></td>
            <td><?php echo $orderID; ?></td>
            <td><?php echo $customerName; ?></td>
            <td><?php echo $country; ?></td>
            <td><?php echo $Product; ?></td>
        </tr>
        </table>
    <button type="submit" class="btn btn-primary">Confirm Request</button>
     </div>
</form>
</body>
</html>

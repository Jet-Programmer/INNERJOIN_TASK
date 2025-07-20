<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            background-color: None;
        }
        h3 .span{
            text-size-adjust: small;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <section>
        <form id="form" action="process.php" method="POST">
            <div class="card p-4 shadow-sm" style="width: 100%; max-width: 500px;">
            <h5 class="text-center mb-3">ORDER INFORMATION  <span class="badge rounded-pill bg-primary">Pending</span></h5>
            <div class="input-group-text mb-3">
                <span class="input-group-text">OrderID</span>
                <label for="orderID" class="form-label"></label>
                <input type="number" class="form-control" name="orderID" placeholder="'0-xxxx'" required>
            </div>
            <div class="input-group-text mb-3">
                <span class="input-group-text">customerID</span>
                <label for="customerID" class="form-label"></label>
                <input type="number" class="form-control" name="customerID" placeholder="@example: '0x'">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Product</span>
                <label for="Product" class="form-label"></label>
                <input type="text" class="form-control" name="Product" placeholder="'@example: Plastic Bag'"required>
            </div>

            <h5 class="text-center mb-3">USER CREDENTIALS  <span class="badge rounded-pill bg-primary">Pending</span></h5>
            <div class="input-group-text mb-3">
                <span class="input-group-text">customerName</span>
                <label for="customerName" class="form-label"></label>
                <input type="text" name="customerName" class="form-control" placeholder="'@example: @John Doe'" required><br><br>
            </div>
            <div class="input-group-text mb-3">
                <span class="input-group-text">Country</span>
                <label for="Country" class="form-label"></label>
                <input type="text" name="Country" class="form-control" placeholder="@example: 'UK'" required><br><br>
            </div>
            <button type="submit" class="btn btn-primary">
                Submit Request
            </button>
            </div>
        </form>
    </section>
</body>
</html>
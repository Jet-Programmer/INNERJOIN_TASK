<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <section>
        <form id="form" action="process.php" method="POST">
            <div class="card p-4 shadow-sm" style="width: 100%; max-width: 500px;">
                <h5 class="text-center mb-3">ORDER INFORMATION <span
                        class="badge rounded-pill bg-primary">Pending</span></h5>
                <div class="input-group-text mb-3">
                    <span class="input-group-text">OrderID</span>
                    <label for="orderID" class="form-label">
                    <input type="number" class="form-control" name="orderID" placeholder="'0-xxxx'" required>
                    </label>
                </div>
                <div class="input-group-text mb-3">
                    <span class="input-group-text">customerID</span>
                    <label for="orderCustomerID" class="form-label">
                    <input type="number" class="form-control" name="orderCustomerID" placeholder="@example: '0x'">
                    </label>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Product</span>
                    <label for="Product" class="form-label">
                    <input type="text" class="form-control" name="Product" placeholder="'@example: Plastic Bag'"
                           required>
                    </label>
                </div>
                <br>
                <div class="card p-4 shadow-sm" style="width: 100%; max-width: 500px;">
                    <h5 class="text-center mb-3"> Customer Info <span
                            class="badge rounded-pill bg-primary">Pending</span></h5>
                    <div class="input-group-text mb-3">
                        <span class="input-group-text">customerID</span>
                        <label for="customerCustomerID" class="form-label">
                        <input type="number" class="form-control" name="customerCustomerID" placeholder="'01'" required>
                        </label>
                    </div>
                    <div class="input-group-text mb-3">
                        <span class="input-group-text">CustomerName</span>
                        <label for="customerName" class="form-label">
                        <input type="text" class="form-control" name="customerName" placeholder="@example: 'John Doe'">
                        </label>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Country</span>
                        <label for="Country" class="form-label">
                        <input type="text" class="form-control" name="Country" placeholder="'@example: 'Ghana'"
                            required>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    Submit Request
                </button>
        </form>
    </section>
</body>

</html>
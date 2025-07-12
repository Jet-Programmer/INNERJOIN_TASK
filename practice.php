<!DOCTYPE html>
<html>
    <?php
    require_once 'db.php';
    ?>
    <head><title>Sign-Up Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body class="d-flex align-items-center justify-content-center vh-100 bg-light">
        <div class="card p-4 shadow-sm" style="width: 100%; max-width: 500px;">
            <h2 class="text-center mb-3">Sign Up To Proceed</h2>
            <form action="signup.php" method="POST">
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="Name" Required>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="Password" Required>
                </div>
                <div class="mb-3">
                    <label for="password_repeat" class="form-label">Repeat</label>
                    <input type="password" class="form-control" name="password_repeat" Required>
                </div>
                <button type="submit" class="btn btn-success w-100">Sign Up</button>
            </form>
        </div>
    </body>
</html>
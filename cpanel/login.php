<?php
session_start(); 
?>
<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Start Bootstrap</title>

    <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
    
</head>
<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="assets/img/bootstraper-logo.png" alt="bootstraper logo">
                    </div>
                    <h6 class="mb-4 text-muted">Sign in to your account</h6>
                   
                    <form action="php/controller/loginController.php" method="post">

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">

                            <select name="type" >
                                <option value="user">مستخدم</option>
                                <option value="company">شركة</option>
                            </select>
                        </div>
                       
                        <button type="submit" name="login" class="btn btn-primary shadow-2 mb-4">Login</button>
                    </form>
                    <?php if (isset($_SESSION['error'])) { ?>
    
                        <div class="alert alert-danger" role="alert"><?php echo $_SESSION['error'];unset($_SESSION['error']); ?> </div>

                    <?php } ?>
                    <p class="mb-2 text-muted">Forgot password? <a href="forgot-password.html">Reset</a></p>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="signup.html">Signup</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="assets/vendor/jquery3/jquery-3.4.1.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.min.js"></script>

</body>
</html>
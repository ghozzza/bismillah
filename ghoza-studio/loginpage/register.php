<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    include '../config.php';
    ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-2">
                    <h2 class="heading-section">Register</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(images/bg-1.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>

                            </div>
                            <form action="../register_a.php" class="signin-form" method="post" enctype="multipart/form-data">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="first_name" required>
                                    <label class="form-control-placeholder">First Name</label>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="last_name" required>
                                    <label class="form-control-placeholder">Last Name</label>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" required>
                                    <label class="form-control-placeholder">Email</label>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pass" required="required">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="cpass" required="required">
                                    <label class="form-control-placeholder" for="password">Confirmation Password</label>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="file" required>
                                    <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="save" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                                <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
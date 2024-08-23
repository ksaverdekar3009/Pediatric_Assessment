<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Charusat - Nursing - Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="includes/img/ilogo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="includes/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="includes/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="includes/css/custom-css.css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-6">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h4 class="text-primary"><i class="fa fa-hashtag me-2"></i>Pediatric Assessment</h4>
                            </a>
                        </div>
                        <form action="logincode.php" method="post">
                            <h4>Sign In</h4>
                            <?php
                            session_start();
                            if (isset($_SESSION['status'])) {
                                echo '<div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                                        <i class="fa fa-exclamation-circle me-2"></i>' . $_SESSION['status'] . '
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                unset($_SESSION['status']);
                            }
                            ?>
                            <div class="input-group mb-3">
                                <input type="text" name="sid" class="form-control" placeholder="Student ID" aria-label="Student ID" aria-describedby="basic-addon2" required>
                                <span class="input-group-text" id="basic-addon2">@charusat.edu.in</span>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control signin-pwd" id="floatingPassword" placeholder="Password" required minlength="6">
                                <label class="signin-pwd" for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                <a href="forgot_password.php">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="login_btn">Sign In</button>
                            <p class="text-center mb-0">Don't have an Account? <a href="staff_registration.php">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="includes/lib/chart/chart.min.js"></script>
    <script src="includes/lib/easing/easing.min.js"></script>
    <script src="includes/lib/waypoints/waypoints.min.js"></script>
    <script src="includes/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="includes/lib/tempusdominus/js/moment.min.js"></script>
    <script src="includes/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="includes/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="includes/js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Charusat - Nursing - Forgot Password</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="includes/img/favicon.ico" rel="icon">

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

        <!-- Forgot Password Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-6">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="signup-title d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h4 class="text-primary"><i class="fa fa-hashtag me-2"></i>Pediatric Assessment</h4>
                            </a>
                        </div>
                        <div class="patient-search-form">
                            <h4>Forgot Password</h4>
                            <?php
                            session_start();
                            if (isset($_SESSION['status'])) {
                                echo '<div class="alert alert-dark alert-dismissible fade show mb-3" role="alert">
                                        <i class="fa fa-exclamation-circle me-2"></i>' . $_SESSION['status'] . '
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                unset($_SESSION['status']);
                            }
                            ?>
                            <form action="forgotpassCode.php" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" name="staff_id" class="form-control" placeholder="Student ID" aria-label="Student ID" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">@charusat.edu.in</span>
                                </div>
                                <button type="submit" name="forgot_password_btn" class="btn btn-primary py-3 w-100 mb-4">Reset Password</button>
                                <p class="text-center mb-0">Already have an Account? <a href="index.php">Sign In</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forgot Password End -->
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
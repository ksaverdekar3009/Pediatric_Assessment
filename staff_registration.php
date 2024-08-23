<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Charusat - Nursing - STUDENT</title>
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

        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-6">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="signup-title d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h4 class="text-primary"><i class="fa fa-hashtag me-2"></i>Pediatric Assessment</h4>
                            </a>
                        </div>
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
                        <div class="patient-search-form">
                            <h4 class="signup-title">Student Registration :</h4>
                            <form action="staff_registrationCode.php" method="POST">
                                <div class="signup-form row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col">
                                        <input type="text" name="staff_first_name" class="form-control" placeholder="First name" aria-label="First name" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="staff_last_name" class="form-control" placeholder="Last name" aria-label="Last name" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <input type="text" name="staff_id" class="form-control" placeholder="Student ID" aria-label="Student ID" aria-describedby="basic-addon2" required>
                                            <span class="input-group-text" id="basic-addon2">@charusat.edu.in</span>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="staff_gender" id="genderMale" value="male" checked>
                                            <label class="form-check-label" for="genderMale">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="staff_gender" id="genderFemale" value="female">
                                            <label class="form-check-label" for="genderFemale">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="signup-form row mb-3">
                                    <label for="phone-number" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="tel" name="staff_phone" class="form-control" id="phone-number" required>
                                    </div>
                                </div>
                                <script>
                                    // Get the phone number field
                                    var phoneNumberField = document.getElementById('phone-number');

                                    // Add an event listener to the phone number field
                                    phoneNumberField.addEventListener('input', function() {
                                        var phoneNumber = phoneNumberField.value;

                                        // Define the regular expression pattern for phone numbers
                                        var phonePattern = /^\d{10}$/;

                                        // Check if the phone number matches the pattern
                                        if (!phonePattern.test(phoneNumber)) {
                                            phoneNumberField.setCustomValidity("Please enter a valid 10-digit phone number");
                                        } else {
                                            phoneNumberField.setCustomValidity('');
                                        }
                                    });
                                </script>
                                <div class="signup-form row mb-3">
                                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="staff_age" class="form-control" id="age">
                                    </div>
                                </div>
                                <div class="signup-form row mb-3">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" minlength="6" required>
                                    </div>
                                </div>
                                <div class="signup-form row mb-3">
                                    <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="staff_password" class="form-control" id="confirmPassword" minlength="6" required>
                                    </div>
                                </div>
                                <script>
                                    // Get password and confirm password fields
                                    var passwordField = document.getElementById('password');
                                    var confirmPasswordField = document.getElementById('confirmPassword');

                                    // Add an event listener to the confirm password field
                                    confirmPasswordField.addEventListener('input', function() {
                                        var password = passwordField.value;
                                        var confirmPassword = confirmPasswordField.value;

                                        // Check if passwords match
                                        if (password !== confirmPassword) {
                                            confirmPasswordField.setCustomValidity("Passwords don't match");
                                        } else {
                                            confirmPasswordField.setCustomValidity('');
                                        }
                                    });
                                </script>
                                <!-- <div class="d-flex align-items-center justify-content-center mb-4">
                                    <a href="forgot_password.php">Forgot Password</a>
                                </div> -->
                                <div class="row top-margin-30">
                                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="staff_registration_btn">Sign Up</button>
                                </div>
                                <p class="text-center mb-0">Already have an Account? <a href="index.php">Sign In</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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
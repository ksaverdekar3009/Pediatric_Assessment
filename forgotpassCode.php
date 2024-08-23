<?php
session_start();
include "dbconn.php";

use Kreait\Firebase\Exception\Auth\UserNotFound;

if (isset($_POST['forgot_password_btn'])) {
    $email = strtolower($_POST['staff_id']) . "@charusat.edu.in";

    try {
        $auth->sendPasswordResetLink($email);

        // Password reset link sent successfully
        $_SESSION['status'] = "Password reset link sent to your email!";
        header("Location: index.php");
        exit();
    } catch (UserNotFound $e) {
        // User not found
        $_SESSION['status'] = "An error occurred. Please try again later.";
        header("Location: forgot_password.php");
        exit();
    } catch (Exception $e) {
        // Other errors
        $_SESSION['status'] = "Email not found. Please enter a valid email address.";
        header("Location: forgot_password.php");
        exit();
    }
}

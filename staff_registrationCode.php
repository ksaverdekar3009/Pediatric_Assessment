<?php
session_start();
include "dbconn.php";

use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Exception\Auth\EmailExists as EmailExistsException;
use App\Services\FirebaseService;

if (isset($_POST['staff_registration_btn'])) {
    $staff_fname = strtolower($_POST['staff_first_name']);
    $staff_lname = strtolower($_POST['staff_last_name']);
    $staff_id = strtolower($_POST['staff_id']);
    $gender = $_POST['staff_gender'];
    $age = $_POST['staff_age'];
    $phone = "+91" . $_POST['staff_phone'];
    $place_of_collection = strtolower($_POST['place_of_collection']);
    $state = $_POST['staff_state'];
    $password = $_POST['staff_password'];

    $timestamp = date('d-m-Y H:i:s', time());

    $email = $staff_id . '@charusat.edu.in';

    try {
        // Check if the email already exists
        $user = $auth->getUserByEmail($email);
        if ($user) {
            $_SESSION['status'] = "Email already exists. Please choose a different email.";
            header("location: staff_registration.php");
            exit();
        }
    } catch (FirebaseException $e) {
        $postData = [
            'ID' => $staff_id,
            'FIRST_NAME' => $staff_fname,
            'LAST_NAME' => $staff_lname,
            'EMAIL' => strtolower($email),
            'GENDER' => $gender,
            'AGE' => $age,
            'MOBILE' => $phone,
            'PASSWORD' => $password,
            'TIMESTAMP' => $timestamp,
        ];
        $postRef = $database->getReference('SIGN_IN_REQUEST/' . $staff_id)->set($postData);

        if ($postRef) {
            $_SESSION['status'] = "Signup request submitted. Waiting for admin approval.";
            header("location:index.php");
            exit();
        } else {
            $_SESSION['status'] = "Firebase Exception: " . $e->getMessage();
            header("location:staff_registration.php");
            exit();
        }
    }
}

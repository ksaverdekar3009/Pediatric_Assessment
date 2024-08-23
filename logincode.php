<?php
session_start();
include "dbconn.php";

use Firebase\Auth\Token\Exception\InvalidToken;

if (isset($_POST['login_btn'])) {
     $sid=strtolower($_POST['sid']);
    $email = $sid . "@charusat.edu.in";
    $clearTextPassword = $_POST['password'];
    $timestamp = date('d-m-Y H:i:s', time());

    try {
        $user = $auth->getUserByEmail($email);
        $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
        $idTokenString = $signInResult->idToken();
        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            $uid = $verifiedIdToken->claims()->get('sub');

            $_SESSION['verified_user_id'] = $uid;
            $_SESSION['idTokenString'] = $idTokenString;

            // Check if the email is admin email
            if ($email === "21bca027@charusat.edu.in") {
                $_SESSION['status'] = "Logged in as Admin";
                header("Location: templates/admin_panel.php"); // Redirect to admin panel page
            } else {
                $_SESSION['status'] = "Logged in";
                header("Location:templates/patient_search.php?uid=$sid");
            }
            exit();
        } catch (InvalidToken $e) {
            echo 'The token is invalid: ' . $e->getMessage();
        } catch (\InvalidArgumentException $e) {
            echo 'The token could not be parsed: ' . $e->getMessage();
        }
    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        $_SESSION['status'] = "No Email Found";
        header("Location:index.php");
        exit();
    } catch (\Kreait\Firebase\Auth\SignIn\FailedToSignIn $e) {
        $_SESSION['status'] = "Invalid Password";
        header("Location:index.php");
        exit();
    }
}

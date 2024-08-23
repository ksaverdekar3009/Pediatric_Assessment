<?php
session_start();
include "dbconn.php";
use Firebase\Auth\Token\Exception\InvalidToken;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;

if (isset($_SESSION['verified_user_id'])) {
    $verifiedIdToken = $_SESSION['verified_user_id'];
    $idTokenString = $_SESSION['idTokenString'];

    try {
        $uid = $auth->verifyIdToken($idTokenString);
        //echo "Working";
    } catch (InvalidToken $e) {
        echo 'The token is invalid: ' . $e->getMessage();
        $_SESSION['status'] = "Token Invalid/Expired.Login Again";
        header("Location:../logout.php");
        exit();
    } catch (\InvalidArgumentException $e) {
        echo 'The token could not be parsed: ' . $e->getMessage();
    }
} else {
    $_SESSION['status'] = "Login to access";
    header("Location:../index.php");
    exit();
}

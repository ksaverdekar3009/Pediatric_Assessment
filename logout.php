<?php
session_start();

if (!isset($_SESSION['verified_user_id'])) {
    $_SESSION['status'] = "You are already logged out.";
    header("Location: index.php");
    exit();
}

unset($_SESSION['verified_user_id']);
unset($_SESSION['idTokenString']);

$_SESSION['status'] = "Logged Out";
header("Location:index.php");
exit();
?>
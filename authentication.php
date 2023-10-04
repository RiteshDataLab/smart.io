<?php
session_start(); 

include('dbcon.php');

use Kreait\Firebase\Exception\Auth\FailedToVerifyToken; 

if (isset($_SESSION['varified_user_id'])) {
   

    $uid = $_SESSION['varified_user_id']; 
    $idTokenString = $_SESSION['idTokenString']; 
    try {
       
        $verifiedIdToken = $auth->verifyIdToken($idTokenString);
        

    } catch (FailedToVerifyToken $e) {
       
        echo 'Failed to verify token: ' . $e->getMessage();
        $_SESSION['status'] = "Token not valid or expired. Please login again.";
        header("Location: logout.php"); 
        exit();
    } catch (\InvalidArgumentException $e) {
        
        echo 'The token is invalid: ' . $e->getMessage();
        $_SESSION['status'] = "Token validation error. Please try again.";
        header("Location: logout.php");
        exit();
    }
} else {
    // If the 'varified_user_id' session variable is not set, the user is not authenticated.
    $_SESSION['status'] = "Log in to access Admin Dashboard";
    header("Location: login.php"); // Redirect the user to the login page.
    exit();
}
?>

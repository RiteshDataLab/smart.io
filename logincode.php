<?php
use Firebase\Auth\Token\Exception\InvalidToken;

session_start(); 

include('dbcon.php'); 
if (isset($_POST['login_now_btn'])) {
    $email = $_POST['email'];
    $clearTextPassword = $_POST['password'];

  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "Invalid email address";
        header("Location: login.php"); 
        exit; 
    }

    try {
        $user = $auth->getUserByEmail($email);

        $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword); 
        $idTokenString = $signInResult->idToken(); 

        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString); 
            $uid = $verifiedIdToken->claims()->get('sub'); 

            $_SESSION['varified_user_id'] = $uid; 
            $_SESSION['idTokenString'] = $idTokenString; 

            $_SESSION['status'] = 'You are logged in successfully';
            header('Location: index.php'); 
            exit; 
        } catch (InvalidToken $e) {
            echo 'The token is invalid: ' . $e->getMessage(); 
        } catch (\InvalidArgumentException $e) {
            echo 'The token is invalid: ' . $e->getMessage(); 
        }
    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        $_SESSION['status'] = "User not found"; 
        header("Location: login.php"); 
        exit; 
    }
}
?>

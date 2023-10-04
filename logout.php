<?php
session_start();

include('authentication.php'); 
include('includes/header.php'); 

unset($_SESSION['varified_user_id']); 
unset($_SESSION['idTokenString']); 

$_SESSION['status'] = 'You are logged OUT successfully'; 
header('Location: login.php'); 
exit; 
?>

<?php

session_start();
include('dbcon.php');

if (isset($_POST['register_now_btn'])) {
    $name = $_POST['fullname'];
    $phone = "+91" . $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Define user properties required for registration.
    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'phoneNumber' => $phone,
        'password' => $password,
        'displayName' => $name,
    ];

    // Create a new user in Firebase Authentication with the specified properties.
    $createdUser = $auth->createUser($userProperties);

    if ($createdUser) {
        $_SESSION['status'] = "User created successfully";
        header("Location: register.php"); // Redirect to the registration page.
    } else {
        $_SESSION['status'] = "User NOT created successfully";
        header("Location: register.php"); // Redirect to the registration page.
    }
}













if(isset($_POST['delete_btn'])) {
    $id = $_POST['id_key'];

    $ref_table = "contacts/" . $id;

    // Delete data from Firebase Realtime Database using the specified reference.
    $deleteData = $database->getReference($ref_table)->remove();

    if ($deleteData) {
        $_SESSION['status'] = "Data DELETED Successfully";
        header("Location: index.php"); // Redirect to the index page.
    } else {
        $_SESSION['status'] = "Data Not DELETED successfully";
        header("Location: index.php"); // Redirect to the index page.
    }
}



if (isset($_POST['Update_data'])) {
    $id = $_POST['id'];
    $side = $_POST['side'];
    $location = $_POST['location'];
    $amount_in_tons = $_POST['amount_in_tons'];
    $date_recorded = $_POST['date_recorded'];

    // Define data to update in Firebase Realtime Database.
    $updateData = [
        'side' => $side,
        'location' => $location,
        'amount_in_tons' => $amount_in_tons,
        'date_recorded' => $date_recorded,
    ];

    $ref_table = "contacts/" . $id;
    // Update data in Firebase Realtime Database using the specified reference.
    $updatequery = $database->getReference($ref_table)->update($updateData);

    if ($updatequery) {
        $_SESSION['status'] = "Data updated successfully";
        header("Location: index.php"); // Redirect to the index page.
    } else {
        $_SESSION['status'] = "Data Not updated successfully";
        header("Location: index.php"); // Redirect to the index page.
    }
}




if (isset($_POST['save_data'])) {
    $side = $_POST['side'];
    $location = $_POST['location'];
    $amount_in_tons = $_POST['amount_in_tons'];
    $date_recorded = $_POST['date_recorded'];

    // Define data to insert into Firebase 
    $postData = [
        'side' => $side,
        'location' => $location,
        'amount_in_tons' => $amount_in_tons,
        'date_recorded' => $date_recorded,
    ];

    $ref_table = "contacts";
    $postRef = $database->getReference($ref_table)->push($postData);

    if ($postRef) {
        $_SESSION['status'] = "Data inserted successfully";
        header("Location: add-contact.php"); // Redirect to the add-contact page.
    } else {
        $_SESSION['status'] = "Data not inserted";
        header("Location: add-contact.php"); // Redirect to the add-contact page.
    }
}



?>
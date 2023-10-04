<?php
session_start(); // Start a PHP session.

if(isset($_SESSION['varified_user_id'])){
    // If a session variable 'varified_user_id' is set, the user is already logged in.
    $_SESSION['status']="you already login";
    header("Location:index.php"); 
    exit();
}


include('includes/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <?php
            if(isset($_SESSION['status']))
            {
                echo "<h4 class='alert alert-success'>".$_SESSION['status']."</h4>";
                unset($_SESSION['status']);
            }
            ?>
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Login Form</h4>
                </div>
                <div class="card-body">
                    <form action="logincode.php" method="POST"> 
                        <div class="form-group mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control" required> 
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Password</label>
                            <input type="password" name="password" class="form-control" required> <!-- Input field for password with required validation. -->
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" name="login_now_btn" class="btn btn-primary">Login Now</button> <!-- Submit button for the form. -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer.php file for this page.
include('includes/footer.php');
?>

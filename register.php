<?php
session_start(); // Start a PHP session to manage user data.

include('includes/header.php'); // Include the header for this page.
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5">

            <?php
            if(isset($_SESSION['status']))
            {
                echo "<h4>".$_SESSION['status']."</h4>";
                unset($_SESSION['status']); 
            }
            ?>

            <div class="card">
                <h4>Register</h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST"> 

                    <div class="form-group mb-3">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" class="form-control" required>  
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" class="form-control" required> 
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required> 
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required> 
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" name="register_now_btn" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php'); 
?>

<?php 
session_start();

include('includes/header.php'); 
?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Add Coal Details...
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                <?php
                    if(isset($_SESSION['status']))
                    {
                        echo"<h4>".$_SESSION['status']."</h4>"; // Display a status message if 'status' is set in the session.
                        unset($_SESSION['status']); // Unset (clear) the 'status' session variable.
                    }
                    ?>
                    <div class="row justify-content-center">

                        <div class="col-md-6">


                            <form action="code.php" method="POST"> <!-- Create a form that submits data to 'code.php' using the POST method. -->
                                <div class="form-group mb-4">
                                    <label for="">SIDE ID</label>
                                    <input type="text" name="side" class="form-control">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Location</label>
                                    <input type="text" name="location" class="form-control">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">amount_in_tons</label>
                                    <input type="text" name="amount_in_tons" class="form-control"> 
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">date_recorded</label>
                                    <input type="" name="date_recorded" class="form-control"> <!-- Input field for phone number. -->
                                </div>
                                <br>
                                <div class="form-group mb-4">
                                    <button type="submit" name="save_data" class="btn btn-primary">Save</button>
                                </div>
                            </form>






                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>





<?php include('includes/footer.php'); ?>
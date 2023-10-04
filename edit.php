<?php
session_start(); // Start a PHP session.

// Include the header.php file for this page.
include('includes/header.php');
?>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>EDIT & UPDATE DATA in Firebase
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row-justify-content-center">
                        <div class="col-md-6">
                            <?php
                            include('dbcon.php');
                            $ref_table ="contacts";
                            $id=$_GET["id"]; // Get the 'id' parameter from the URL.

                            
                            $editdata = $database->getReference($ref_table)->getChild($id)->getValue();

                            ?>

                            <form action="code.php" method="POST">
                                <input type="hidden" name="id" value="<?=$id?>" />
                                <div class="form-group mb-2">
                                    <label for="">SIDE ID<</label>
                                    <input type="text" name="side" value="<?=$editdata['side'];?>" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Location</label>
                                    <input type="text" name="location" value="<?=$editdata['location'];?>" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">amount_in_tons</label>
                                    <input type="text" name="amount_in_tons" value="<?=$editdata['amount_in_tons'];?>" class="form-control">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">date_recorded</label>
                                    <input type="text" name="date_recorded" value="<?=$editdata['date_recorded'];?>" class="form-control">
                                </div>
                                <br>
                                <div class="form-group mb-2">
                                    <button type="submit" name="Update_data" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer.php file for this page.
include('includes/footer.php');
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

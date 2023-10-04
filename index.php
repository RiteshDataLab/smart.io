
<?php 

include('authentication.php');
include('includes/header.php'); 

?>



<div class="container">
    <div class="row">
    <div class="col-md-3">
            <div class="card my-3">
                <div class="card-body">
                    <h5>Total Records:
                        <?php
                        
                        include('dbcon.php');

                       
                        $ref_table = "contacts";

                       
                        $totalnum = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo $totalnum; // Display the total number of records.
                        ?>
                    </h5>
                </div>
            </div>
        </div>


        <div class="col-md-9 my-3 text-end">
            <!-- Links for user actions like login, registration, and logout. -->
            <a href="login.php" class="btn btn-success">Login</a>
            <a href="register.php" class="btn btn-primary">Register</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>



        <div class="col-md-12">
        <?php
            if(isset($_SESSION['status'])) 
            {
                echo "<h4>".$_SESSION['status']."</h4>"; 
                unset($_SESSION['status']); 
            }
            ?>
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Admin Page
                        <a href="add-contact.php" class="btn btn-primary float-end">ADD</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S1.NO</th>
                                <th>SIDE ID</th>
                                <th>Location</th>
                                <th>amount_in_tons</th>
                                <th>date_recorded</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('dbcon.php');
                            $ref_table = "contacts";
                            // Fetch data from Firebase.
                            $fetchdata = $database->getReference($ref_table)->getValue();

                            if ($fetchdata) {
                                $count = 1;
                                foreach ($fetchdata as $key => $row) {
                            ?>
                                    <tr>
                                        <td><?php echo $count++; ?></td>
                                        <td><?php echo $row['side']; ?></td>
                                        <td><?php echo $row['location']; ?></td>
                                        <td><?php echo $row['amount_in_tons']; ?></td>
                                        <td><?php echo $row['date_recorded']; ?></td>
                                        <td>
                                            <a href="edit.php?id=<?= $key; ?>" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>
                                            <form method="post" action="code.php">
                                                <input type="hidden" name="id_key" value="<?= $key; ?>">
                                                <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="6">No records found</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>





<?php include('includes/footer.php'); ?>
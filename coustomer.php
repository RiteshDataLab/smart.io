
<?php 

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



        <div class="col-md-12">
        <?php
            if(isset($_SESSION['status'])) 
            {
                echo "<h4>".$_SESSION['status']."</h4>"; 
                unset($_SESSION['status']); 
            }
            ?>
            <div class="card mt-4">
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S1.NO</th>
                                <th>SIDE ID</th>
                                <th>Location</th>
                                <th>amount_in_tons</th>
                                <th>date_recorded</th>
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
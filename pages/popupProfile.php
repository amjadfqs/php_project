<?php
include '../conf/ini.php';
include '../conf/conn.php';
$query = "SELECT * FROM `users` WHERE UserID = " . $_SESSION['ID'];
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($con);
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-primary" id="exampleModalLabel">Welcome
                    <span class="text-dark"><?php echo $row['FirstName'] ?></span>
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#">
                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="90" height="89" class="rounded-circle">
                </a>
            </div>
            <div class="container">
                <div class="modal-body">
                    <!-- first row -->
                    <div class="row">
                        <div class="col-6 text-center border-bottom border-end hover">
                            <span class="text-primary">First Name:</>
                                <p class="text-dark"><?php echo $row['FirstName'] ?></p>
                        </div>
                        <div class="col-6 text-center border-bottom border-start hover">
                            <span class="text-primary">Second Name:</span>
                            <p class="text-dark"><?php echo $row['LastName'] ?></p>
                        </div>
                    </div>
                    <!-- end first row -->
                    <!-- second row -->
                    <div class="row">
                        <div class="col-6 text-center border-top border-end hover">
                            <span class="text-primary mt-3">Email:</span>
                            <p class="text-dark"><?php echo $row['Email'] ?></p>
                        </div>
                        <div class="col-6 text-center border-top border-start hover">
                            <span class="text-primary">city</span>
                            <p class="text-dark"><?php echo $row['City'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end second row -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?php echo $pages ?>profile.php" type="button" class="btn btn-primary">Update</a>
            </div>
        </div>
    </div>
</div>
<?php include $temp . 'js.php'; ?>
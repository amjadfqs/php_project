<?php
include '../conf/ini.php';
include '../conf/conn.php';

if (isset($_SESSION['ID'])) {
    $query = "SELECT * FROM `users` WHERE UserID = " . $_SESSION['ID'];
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    echo $row['FirstName'];
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
                <div class="d-flex justify-content-center mt-2 mb-2">
                    <a href="#">
                        <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="80" height="79" class="rounded-circle">
                    </a>
                </div>
                <div class="container">
                    <div class="modal-body">
                        <!-- first row -->
                        <div class="row">
                            <div class="col-6 text-center border-bottom border-end hover">
                                <p class="text-primary">First Name:</p>
                                <!-- <p class="text-dark"><?php echo $row['FirstName'] ?></p> -->
                            </div>
                            <div class="col-6 text-center border-bottom border-start hover">
                                <p class="text-primary">Second Name:</p>
                                <!-- <p class="text-dark"><?php echo $row['LastName'] ?></p> -->
                            </div>
                        </div>
                        <!-- end first row -->
                        <!-- second row -->
                        <div class="row">
                            <div class="col-6 text-center border-top border-end hover">
                                <p class="text-primary">Email:</p>
                                <!-- <p class="text-dark"><?php echo $row['Email'] ?></p> -->
                            </div>
                            <div class="col-6 text-center border-top border-start hover">
                                <p class="text-primary">Second Name</p>
                                <!-- <p class="text-dark"><?php echo $row['LastName'] ?></p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end second row -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
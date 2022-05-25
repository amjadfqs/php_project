<?php
$pageTitle = "Home Page";
include '../conf/ini.php';
include $temp . 'header.php';

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="d-flex justify-content-center">
                <a href="#">
                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="200" height="190" class="rounded-circle"> </a>
            </div>
            <h5 class="text-center text-primary">Welcome Adham</h5>
        </div>
        <div class="col-md-9 d-flex justify-content-center">
            <div class="row ">
                <div class="col-12 col-md-6">
                    <label for="firstName" class="form-label">First Name:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-user text-muted"></i>
                        </span>
                        <input name="firstName" type="text" id="firstName" class="form-control" value="" />
                        <!-- tooltip -->
                        <span class="input-group-text">
                            <span class="tt" data-bs-placement="bottom" title="Enter your first name">
                                <i class="far fa-question-circle text-muted"></i>
                            </span>
                        </span>
                    </div>
                    <!-- <div class="h6 text-danger mb-3"><?php echo $errors['firstName']; ?></div> -->
                    <!-- end of first name -->
                </div>
                <div class="col-12 col-md-6">
                    <label for="lastName" class="form-label">Last Name:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-user text-muted"></i>
                        </span>
                        <input name="lastName" type="text" id="lastName" class="form-control" value="" />
                        <!-- tooltip -->
                        <span class="input-group-text">
                            <span class="tt" data-bs-placement="bottom" title="Enter your real last name">
                                <i class="far fa-question-circle text-muted"></i>
                            </span>
                        </span>
                    </div>
                    <!-- <div class="h6 text-danger mb-3"><?php echo $errors['lastName']; ?></div> -->
                    <!-- end of Last name -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include $temp . 'footer.php'; ?>
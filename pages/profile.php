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
        <!-- First Row -->
        <div class="col-md-9 d-flex justify-content-center">
            <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
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
                <!-- second row -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="pass" class="form-label">Password:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock text-muted"></i>
                            </span>
                            <input name="pass1" type="password" id="pass" class="form-control" value="" />
                            <!-- tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really...">
                                    <i class="far fa-question-circle text-muted"></i>
                                </span>
                            </span>
                        </div>
                        <!-- <div class="h6 text-danger mb-3"><?php echo $errors['pass1']; ?></div> -->
                        <!-- end of password -->
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="pass2" class="form-label">Confirm Password:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock text-muted"></i>
                            </span>
                            <input name="pass2" type="password" id="pass2" class="form-control" value="" />
                            <!-- tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really...">
                                    <i class="far fa-question-circle text-muted"></i>
                                </span>
                            </span>
                        </div>
                        <!-- <div class="h6 text-danger mb-3"><?php echo $errors['pass2']; ?></div> -->
                        <!-- end of password -->
                    </div>
                </div>
                <!-- End of fourth Row -->
                <!-- Buttons -->
                <div class="row mt-4 mb-2 justify-content-center gap-2 gap-md-0">
                    <div class="col-6">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary text-dark w-100">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php include $temp . 'footer.php'; ?>
<?php
session_start();
$pageTitle = "Profile Page";
include '../conf/conn.php';
include '../conf/ini.php';


$errors = array('firstName' => '', 'lastName' => '', 'pass1' => '', 'pass2' => '');

if (isset($_POST['update'])) {
    // Check if username is empty
    if (empty(trim($_POST['firstName']))) {
        $errors['firstName'] = 'Sorry The name is required';
    } else {
        $firstName = mysqli_real_escape_string($con, trim($_POST['firstName']));
    }
    // Check if username is empty
    if (empty(trim($_POST['lastName']))) {
        $errors['lastName'] = 'Sorry The last name is required';
    } else {
        $lastName = mysqli_real_escape_string($con, trim($_POST['lastName']));
    }

    // check the pass 1
    if (empty($_POST["pass1"])) {
        $errors['pass1'] = "Password is required";
    } else {
        $pass1 = $_POST['pass1'];
        if (strlen($pass1) < 8) {
            $errors['pass1'] = "Your Password Must Contain At Least 8 Characters!";
        } elseif (!preg_match("#[0-9]+#", $pass1)) {
            $errors['pass1'] = "Your Password Must Contain At Least 1 Number!";
        } elseif (!preg_match("#[A-Z]+#", $pass1)) {
            $errors['pass1'] = "Your Password Must Contain At Least 1 Capital Letter!";
        } elseif (!preg_match("#[a-z]+#", $pass1)) {
            $errors['pass1'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
    }
    // check the confirm password
    if (empty(trim($_POST['pass2']))) {
        if ($_POST['pass1'] != $_POST['pass2']) {
            $errors['pass2'] = 'Your password did not match the confirmed password.';
        }
        $errors['pass2'] = 'Sorry The confirm password is required';
    }

    if (array_filter($errors)) {
    } else {
        $pass1  = mysqli_real_escape_string($con, $_POST['pass1']);
        // dealing with the database
        $query = "UPDATE users SET FirstName = '$firstName', LastName = '$lastName', Password = SHA1('$pass1') WHERE UserID=" . $_SESSION['ID'];
        $result = @mysqli_query($con, $query);
        if ($result) {
            echo '<div class="alert alert-primary text-center" role="alert">
            Updated Successfully
            </div>';
            header("refresh:3 ;url=index.php");
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Sorry there was an error
                    </div>';
        }
        mysqli_close($con);
    }
}
include $temp . 'header.php';

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="d-flex justify-content-center">
                <a href="#">
                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"
                        width="200" height="190" class="rounded-circle"> </a>
            </div>
            <h5 class="text-center text-primary">Welcome</h5>
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
                        <div class="h6 text-danger mb-3"><?php echo $errors['firstName']; ?></div>
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
                        <div class="h6 text-danger mb-3"><?php echo $errors['lastName']; ?></div>
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
                        <div class="h6 text-danger mb-3"><?php echo $errors['pass1']; ?></div>
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
                        <div class="h6 text-danger mb-3"><?php echo $errors['pass2']; ?></div>
                        <!-- end of password -->
                    </div>
                </div>
                <!-- End of fourth Row -->
                <!-- Buttons -->
                <div class="row mt-4 mb-2 justify-content-center justify-content-md-end gap-2 gap-md-0">
                    <div class="col-3">
                        <a type="button" class="btn btn-outline-danger text-dark w-100"
                            href="<?php $pages; ?>index.php">Cancel</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" name="update" value="update"
                            class="btn btn-primary text-dark w-100">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php include $temp . 'footer.php'; ?>
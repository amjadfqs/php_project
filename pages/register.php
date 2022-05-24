<?php
ob_start();
?>
<?php
$pageTitle = "Register Page";
include '../conf/ini.php';
include '../conf/conn.php';
include $temp . 'header.php';

$firstName = $lastName = $email = $userName = $pass1 = $num = $city = '';
$errors = array('firstName' => '', 'lastName' => '', 'email' => '', 'userName' => '', 'pass1' => '', 'pass2' => '', 'num' => '', 'city' => '');

if (isset($_POST['submit'])) {
    // Check if username is empty
    if (empty(trim($_POST['firstName']))) {
        $errors['firstName'] = 'Sorry The name is required';
    }
    // Check if username is empty
    if (empty(trim($_POST['lastName']))) {
        $errors['lastName'] = 'Sorry The last name is required';
    }
    // check the email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = '&#9940 Email must be a valid email address';
        }
    }
    // check the User Name
    if (empty(trim($_POST['userName']))) {
        $errors['userName'] = 'Sorry The user name is required';
    }
    // check the pass 1
    if (empty($_POST["pass1"])) {
        $errors['pass1'] = "Password is required";
    } else {
        $pass1 = $_POST['pass1'];
        if (strlen($_POST["pass1"]) <= 8) {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        } elseif (!preg_match("#[0-9]+#", $pass1)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        } elseif (!preg_match("#[A-Z]+#", $pass1)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        } elseif (!preg_match("#[a-z]+#", $pass1)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
    }
    // check the confirm password
    if (empty(trim($_POST['pass2']))) {
        if ($_POST['pass1'] != $_POST['pass2']) {
            $errors['pass2'] = 'Your password did not match the confirmed password.';
        }
        $errors['pass2'] = 'Sorry The confirm password is required';
    }
    if (empty(trim($_POST['num']))) {
        $errors['num'] = 'Sorry The number is required';
    }
    if (empty(trim($_POST['city']))) {
        $errors['city'] = 'Sorry The city is required';
    }
    if (array_filter($errors)) {
    } else {
        $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
        $lastName  = mysqli_real_escape_string($con, $_POST['lastName']);
        $email  = mysqli_real_escape_string($con, $_POST['email']);
        $userName  = mysqli_real_escape_string($con, $_POST['userName']);
        $pass1  = mysqli_real_escape_string($con, $_POST['pass1']);
        $num  = mysqli_real_escape_string($con, $_POST['num']);
        $city  = mysqli_real_escape_string($con, $_POST['city']);
        // dealing with the database
        $query = "INSERT INTO users (FirstName, LastName, Email, UserName, Password, number, city)VALUES('$firstName','$lastName','$email','$userName', SHA1('$pass1'),'$num','$city')";
        $result = mysqli_query($con, $query);
        if ($result) {
            header('location:index.php');
            ob_end_flush();
        } else {
            echo '<h1>System Error</h1>';
            echo '<p>' . mysqli_error($con) . '<br />Query: ' . $query . '</p>';
        }
        mysqli_close($con);
    }
}
?>
<div class="container my-5">
    <div class="d-flex justify-content-center">
        <div class="border shadow-lg p-3 mb-5 rounded my-2 bg-light" style="width: 35rem;">
            <h2 class="text-dark pb-2 mb-4 text-center">Register</h2>
            <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
                <label for="firstName" class="form-label">First Name:</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-user text-muted"></i>
                    </span>
                    <input name="firstName" type="text" id="firstName" class="form-control" value="<?= $firstName ?>" />
                    <!-- tooltip -->
                    <span class="input-group-text">
                        <span class="tt" data-bs-placement="bottom" title="Enter your real name">
                            <i class="far fa-question-circle text-muted"></i>
                        </span>
                    </span>
                </div>
                <div class="h6 text-danger mb-3"><?php echo $errors['firstName']; ?></div>
                <!-- end of first name -->
                <label for="lastName" class="form-label">Last Name:</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-user text-muted"></i>
                    </span>
                    <input name="lastName" type="text" id="lastName" class="form-control" value="<?= $lastName ?>" />
                    <!-- tooltip -->
                    <span class="input-group-text">
                        <span class="tt" data-bs-placement="bottom" title="Enter your real last name">
                            <i class="far fa-question-circle text-muted"></i>
                        </span>
                    </span>
                </div>
                <div class="h6 text-danger mb-3"><?php echo $errors['lastName']; ?></div>
                <!-- end of Last name -->
                <!--  -->
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-envelope text-muted"></i>
                    </span>
                    <input name="email" type="email" id="email" class="form-control" value="<?= $email ?>" />
                    <!-- tooltip -->
                    <span class="input-group-text">
                        <span class="tt" data-bs-placement="bottom" title="Enter your real email">
                            <i class="far fa-question-circle text-muted"></i>
                        </span>
                    </span>
                </div>
                <div class="h6 text-danger mb-3"><?php echo $errors['email']; ?></div>
                <!-- end of email -->
                <!--  -->
                <label for="num" class="form-label">Phone number:</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-user text-muted"></i>
                    </span>
                    <input name="num" type="number" id="num" class="form-control" value="<?= $num ?>" />
                    <!-- tooltip -->
                    <span class="input-group-text">
                        <span class="tt" data-bs-placement="bottom" title="Enter your real name">
                            <i class="far fa-question-circle text-muted"></i>
                        </span>
                    </span>
                </div>
                <div class="h6 text-danger mb-3"><?php echo $errors['num']; ?></div>
                <!-- end of number-->
                <!--  -->
                <label for="city" class="form-label">City:</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-user text-muted"></i>
                    </span>
                    <input name="city" type="text" id="city" class="form-control" value="<?= $city ?>" />
                    <!-- tooltip -->
                    <span class="input-group-text">
                        <span class="tt" data-bs-placement="bottom" title="Enter your real name">
                            <i class="far fa-question-circle text-muted"></i>
                        </span>
                    </span>
                </div>
                <div class="h6 text-danger mb-3"><?php echo $errors['city']; ?></div>
                <!-- end of number-->
                <!--  -->
                <label for="userName" class="form-label">User Name:</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-at text-muted"></i>
                    </span>
                    <input name="userName" type="text" id="userName" class="form-control" value="<?= $userName ?>" />
                    <!-- tooltip -->
                    <span class="input-group-text">
                        <span class="tt" data-bs-placement="bottom" title="Enter a valid user-name">
                            <i class="far fa-question-circle text-muted"></i>
                        </span>
                    </span>
                </div>
                <div class="h6 text-danger mb-3"><?php echo $errors['userName']; ?></div>
                <!-- end of user name -->
                <!--  -->
                <label for="pass" class="mt-2 form-label">Password:</label>
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
                <!--  -->
                <label for="pass2" class="mt-2 form-label">Confirm Password:</label>
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
                <!--  -->
                <div class="mt-4 mb-2">
                    <button type="submit" name="submit" value="submit"
                        class="btn btn-primary text-secondary">Register</button>
                    <button type="submit" name="submit" value="submit"
                        class="btn btn-primary text-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
const tooltips = document.querySelectorAll('.tt')
tooltips.forEach(t => {
    new bootstrap.Tooltip(t)
})
</script>
<!-- Pills content -->
<?php include $temp . 'footer.php'; ?>
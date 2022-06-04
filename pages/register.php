<?php
if (isset($_COOKIE['user']) && isset($_SESSION['ID'])) {
    header('location: login.php');
}
$pageTitle = "Register Page";
include '../conf/ini.php';
include $temp . 'header.php';
include '../conf/conn.php';

$firstName = $lastName = $email = $userName = $pass1 = $city =  $gender = '';
$errors = array('firstName' => '', 'lastName' => '', 'email' => '', 'userName' => '', 'pass1' => '', 'pass2' => '', 'city' => '', 'gender' => '');

if (isset($_POST['submit'])) {
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
    // check the gender
    if (!isset($_POST['gender'])) {
        $errors['gender'] = 'Sorry The gender is required';
    } else {
        $gender = mysqli_real_escape_string($con, trim($_POST['gender']));
    }
    // check the email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required';
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = '&#9940 Email must be a valid email address';
        } else {
            $email = mysqli_real_escape_string($con, trim($_POST['email']));
        }
    }
    // check the User Name
    if (empty(trim($_POST['userName']))) {
        $errors['userName'] = 'Sorry The user name is required';
    } else {
        $userName = mysqli_real_escape_string($con, trim($_POST['userName']));
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

    if (!isset($_POST['city'])) {
        $errors['city'] = 'Sorry The city is required';
    }

    if (array_filter($errors)) {
    } else {
        $pass1  = mysqli_real_escape_string($con, $_POST['pass1']);
        $city = mysqli_real_escape_string($con, trim($_POST['city']));

        $sql_u = "SELECT * FROM users WHERE UserName='$userName'";
        $sql_e = "SELECT * FROM users WHERE email='$email'";
        $res_u = mysqli_query($con, $sql_u);
        $res_e = mysqli_query($con, $sql_e);

        if (mysqli_num_rows($res_u) > 0) {
            $errors['userName'] = 'Sorry The user name is already taken';
        } elseif (mysqli_num_rows($res_e) > 0) {
            $errors['email'] = 'Sorry The email is already taken';
        } else {
            // dealing with the database
            $query = "INSERT INTO users (FirstName, LastName, Gender, Email, UserName, Password , city) VALUES ('$firstName','$lastName', '$gender', '$email','$userName', SHA1('$pass1'),'$city')";
            $result = mysqli_query($con, $query);
            if ($result) {
                header('location:login.php');
            } else {
                echo '<h1>System Error</h1>';
                echo '<p>' . mysqli_error($con) . '<br />Query: ' . $query . '</p>';
            }
        }
        mysqli_close($con);
    }
}
?>
<div class="container my-5">
    <div class="d-flex justify-content-center">
        <div class="border shadow-lg p-3 mb-5 rounded my-2 bg-light" style="width: 40rem;">
            <h2 class="text-muted pb-2 mb-4 text-center b">Register</h2>
            <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
                <!-- First Row -->
                <div class="row ">
                    <div class="col-12 col-md-6">
                        <label for="firstName" class="form-label">First Name:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user text-muted"></i>
                            </span>
                            <input name="firstName" type="text" id="firstName" class="form-control" value="<?= htmlspecialchars($firstName) ?>" />
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
                    </div>
                </div>
                <!-- End of first Row -->
                <!-- start the second row -->
                <div class="row ">
                    <div class="col-12 col-md-6">
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
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="userName" class="form-label">User Name:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user text-muted"></i>
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
                    </div>
                </div>
                <!-- End of second Row -->
                <!-- third Row -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="gender" class="form-label">Gender:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-venus-mars text-muted"></i>
                            </span>
                            <select name="gender" class="form-select">
                                <option value="NULL" selected disabled>Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                        <div class="h6 text-danger mb-3"><?php echo $errors['gender']; ?></div>
                        <!-- end of gender -->
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="city" class="form-label">City:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-map-marker-alt text-muted"></i>
                            </span>
                            <select name="city" class="form-select">
                                <option value="NULL" selected disabled>City</option>
                                <option value="Sana'a">Sana'a</option>
                                <option value="Taizz">Taizz</option>
                                <option value="Aden">Aden</option>
                                <option value="Al Hudaydah">Al Hudaydah</option>
                                <option value="Ibb">Ibb</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="h6 text-danger mb-3"><?php echo $errors['city']; ?></div>
                    </div>
                </div>
                <!-- End of third Row -->
                <!-- fourth Row -->
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
                <div class="row mt-4 mb-2 justify-content-center gap-2 gap-md-0">
                    <div class="col-6">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary text-dark w-100">Register</button>
                    </div>
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
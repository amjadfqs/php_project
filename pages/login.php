<?php
$pageTitle = "Login Page";
include '../conf/ini.php';
include_once '../conf/conn.php';
include $temp . 'header.php';
if (isset($_COOKIE['user'])) {
    header('location: index.php');
}

$Uname = $pass = '';
$errors = array('Uname' => '', 'pass' => '');

if (isset($_POST['submit'])) {
    // Check if username is empty
    if (empty(trim($_POST['Uname']))) {
        $errors['Uname'] = 'Please enter username.';
    } else {
        $Uname = mysqli_real_escape_string($con, $_POST['Uname']);
    }
    // Check if password is empty
    if (empty(trim($_POST['pass']))) {
        $errors['pass'] = 'Please enter your password.';
    } else {
        $pass = sha1($_POST["pass"]);
    }

    if (array_filter($errors)) {
    } else {
        $query = "SELECT * FROM `users` WHERE `UserName`= '$Uname' AND Password = '$pass' ";
        $result = mysqli_query($con, $query) or die('There is an error');

        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        // $active = $row['active'];

        $count = mysqli_num_rows($result);
        print_r($result);
        if ($count == 1) {
            setcookie('user', $Uname, time() + 86400, '/');
            header('location: index.php');
            echo 'ff';
        } else {
            $errors = "Your Login Name or Password is invalid";
        }
    }
}



?>

<!-- Pills navs -->
<div class="d-flex justify-content-center row w-100 my-5">
    <div
        class="border shadow-lg p-3 mb-5 bg-body rounded row justify-content-center p-3 my-2 bg-light col-sm-6 col-md-3">
        <h2 class="text-dark pb-2 mb-4 text-center">Login</h2>
        <div class="col-lg-12">
            <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
                <label for="Uname" class="form-label">User Name:</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-user text-muted"></i>
                    </span>
                    <input name="Uname" type="text" id="Uname" class="form-control"
                        value="<?php echo htmlspecialchars($Uname); ?>" />
                    <!-- tooltip -->
                    <span class="input-group-text">
                        <span class="tt" data-bs-placement="bottom"
                            title="Enter an your user name that you registered with">
                            <i class="far fa-question-circle text-muted"></i>
                        </span>
                    </span>
                </div>
                <!-- <div class="h6 text-danger mb-3"><?php echo $errors['Uname']; ?></div> -->

                <label for="pass" class="mt-2 form-label">Password:</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-lock text-muted"></i>
                    </span>
                    <input name="pass" type="password" id="pass" class="form-control" value="" />
                    <!-- tooltip -->
                    <span class="input-group-text">
                        <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really...">
                            <i class="far fa-question-circle text-muted"></i>
                        </span>
                    </span>
                </div>
                <!-- <div class="h6 text-danger mb-3"><?php echo $errors['pass']; ?></div> -->
                <div class="mt-4 mb-2 shadow text-center">
                    <button type="submit" name="submit" vlaue="submit"
                        class="btn btn-primary text-secondary w-100">Login</button>
                </div>
                <div class="text-center">
                    <p>Don't have an account? <a href="#!">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Carousel -->
<div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                class="active bg-primary" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="bg-primary"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="bg-primary"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item mb-5 active" data-bs-interval="10000">
                <div class="container mt-lg-5">
                    <div class="row">
                        <div class="col mt-5 text-center text-sm-start">
                            <h1 class="mt-5"> Get funded now </h1>
                            <p>
                                Lorem ipsum dolor sit Lorem ipsum dolor sit <br />e
                                Lorem ipsum dolor sit Lorem ipsum dolor sit
                                <br /> Lorem ipsum Lorem ipsum dolor sit ?
                            </p>
                            <a class="btn btn-primary mt-3" role="button" href="#">Start a project</a>
                        </div>
                        <!-- to break between them -->
                        <div class="col-md-auto my-3">
                        </div>
                        <!-- to break between them -->
                        <div class="col active">
                            <img class="w-100 img-fluid" src="<?php echo $img; ?>slide3.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item mb-5" data-bs-interval="2000">
                <div class="container mt-lg-5">
                    <div class="row">
                        <div class="col mt-5 text-center text-sm-start">
                            <h1 class="mt-5"> Funding projects </h1>
                            <p class="g-sm-5">
                                Lorem ipsum dolor sit Lorem ipsum dolor sit <br />e
                                Lorem ipsum dolor sit Lorem ipsum dolor sit
                                <br /> Lorem ipsum Lorem ipsum dolor sit ?
                            </p>
                            <a class="btn btn-primary mt-3" role="button" href="#">Founding project now</a>
                        </div>
                        <div class="col-md-auto my-5">
                        </div>
                        <div class="col">
                            <img class="w-100 img-fluid" src="<?php echo $img; ?>slide2.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item mb-5">
                <!-- content -->
                <div class="container mt-lg-5">
                    <div class="row">
                        <div class="col mt-5 text-center text-sm-start">
                            <h1 class="mt-5 "> User view </h1>
                            <p class="">
                                Lorem ipsum dolor sit Lorem ipsum dolor sit <br />e
                                Lorem ipsum dolor sit Lorem ipsum dolor sit
                                <br /> Lorem ipsum Lorem ipsum dolor sit ?
                            </p>
                            <a class="btn btn-primary mt-3" role="button" href="#">Learn more</a>
                        </div>
                        <div class="col-md-auto my-5">
                        </div>
                        <div class="col">
                            <img class="w-100 img-fluid" src="<?php echo $img; ?>slide1.svg">
                        </div>
                    </div>
                </div>
            </div>
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
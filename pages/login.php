<?php
session_start();
if (isset($_COOKIE['user']) && isset($_SESSION['ID'])) {
  header('location: index.php');
}
$pageTitle = "Login Page";
include '../conf/ini.php';
include_once '../conf/conn.php';

$Uname = $pass = '';
$errors = array('Uname' => '', 'pass' => '', 'both' => '');

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
    $query = "SELECT UserID , UserName , Password, GroupID  FROM `users` WHERE `UserName`= '$Uname' AND Password = '$pass'";
    $result = mysqli_query($con, $query) or die('There is an error');
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['active'];
    $count = mysqli_num_rows($result);
    if ($count == 1) {
      $_SESSION['ID'] = $row['UserID'];
      $_SESSION['GroupID'] = $row['GroupID'];
      setcookie('user', $Uname, time() + 86400, '/');
      if ($_SESSION['GroupID'] == '1') {
        header("Location: ../admin/members.php");
      } else {
        header('location: index.php');
      }
    } else {
      $errors['both'] = "Your Username or Password is invalid";
    }
  }
}
include $temp . 'header.php';
?>

<div class="container my-5">
    <div class="d-flex justify-content-center">
        <div class="border shadow-lg p-3 mb-5 rounded my-2 bg-light">
            <h2 class="text-dark pb-2 mb-4 text-center">Login</h2>
            <div class="h6 text-center text-danger mb-3"><?php echo $errors['both']; ?></div>
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
                <div class="h6 text-danger mb-3"><?php echo $errors['Uname']; ?></div>
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
                <div class="h6 text-danger mb-3"><?php echo $errors['pass']; ?></div>
                <div class="mt-4 mb-2 shadow text-center">
                    <button type="submit" name="submit" value="submit"
                        class="btn btn-primary text-secondary w-100">Login</button>
                </div>
                <div class="text-center">
                    <p>Don't have an account? <a href="<?php echo $pages; ?>register.php">Register</a></p>
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
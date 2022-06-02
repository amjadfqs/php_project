<?php
$pageTitle = "Update Page";
include '../conf/ini.php';
include '../conf/conn.php';
include_once $temp . 'header.php';

if (isset($_GET['id'])) {
    $id = (int) mysqli_real_escape_string($con, $_GET['userID']);
    $SelectQ = 'Select FirstName, LastName, GroupID from users where UserID = ' . $id;
    $result = @mysqli_query($con, $SelectQ) or die('There is no error in the query');
    $row = mysqli_fetch_array($result);
    mysqli_free_result($result);

    if (isset($_POST['submit'])) {
        if (isset($_POST['role'])) {
            $role = $_POST['role'];
            $query = 'UPDATE users SET GroupID = ' . $role . ' WHERE UserID = ' . $id;
            $result = @mysqli_query($con, $query) or die('There is no error in the query');
            header('Location: users.php');
        } else {
            echo '<div class="alert alert-danger" role="alert">
        Please select a role
        </div>';
        }
    }
}


?>

<div class="container mt-5">
    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
        <div class="row justify-content-center">
            <div class="col-2 text-center">
                <span class="text-primary">First Name:</>
                    <p class="text-dark"><?php echo $row['FirstName'] ?></p>
            </div>
            <div class="col-2 text-center">
                <span class="text-primary">Second Name:</span>
                <p class="text-dark"><?php echo $row['LastName'] ?></p>
            </div>
            <div class="col-4 col-md-2">
                <select name="role" class="form-select">
                    <option value="NULL" selected disabled>Role</option>
                    <option value="1">Admin</option>
                    <option value="2">Publiser</option>
                    <option value="0">User</option>
                </select>
            </div>
            <div class="col-3 col-md-2">
                <button type="submit" name="submit" value="submit" class="btn btn-primary text-dark w-100">Update</button>
            </div>
        </div>
    </form>
</div>
<?php
ob_start();
$pageTitle = "Update Page";
include '../conf/ini.php';
include $temp . 'header.php';
include './secureHeader.php';
include '../conf/conn.php';

if (isset($_GET['id']) && !isset($_POST['update'])) {
    $id = (int) mysqli_real_escape_string($con, $_GET['id']);
    $id = is_numeric($id) ? $id : NULL;
    $SelectQ = 'Select FirstName, LastName, GroupID from users where UserID =' . $id;
    $result = @mysqli_query($con, $SelectQ) or die('There is no error in the query');
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        @mysqli_free_result($result);
        @mysqli_close($con);
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">
                    Sorry, there is no data to display </div>';
        echo "<div class='d-flex justify-content-center'>
            <img src=' $img/notfound.svg'>
        </div>";
        exit();
    }
    //
} elseif (isset($_POST['update'])) {
    $id = (int) mysqli_real_escape_string($con, $_GET['id']);
    $id = is_numeric($id) ? $id : NULL;
    if (isset($_POST['role'])) {
        $role = (int)$_POST['role'];
        $query = "UPDATE users SET GroupID = '$role' WHERE UserID = " . $id;
        $result = @mysqli_query($con, $query) or die('There is no error in the query');
        if ($result) {
            echo '<div class="alert alert-primary text-center" role="alert">
            Updated Successfully
            </div>';
            header("refresh:2 ;url=index.php");
            ob_end_flush();
        } else {
            echo '<div class="alert alert-danger" role="alert">
        Please select a role
        </div>';
        }
        mysqli_close($con);
    } else {
        echo '<div class="alert alert-danger" role="alert">
                    Sorry there was an error
                    </div>';
    }
}
?>

<div class="container mt-5">
    <form action='<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>' method="post">
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
                <button type="submit" name="update" value="submit" class="btn btn-primary text-dark w-100">Update</button>
            </div>
        </div>
    </form>
</div>
<?php
ob_start();
include '../conf/ini.php';
include $temp . 'header.php';
include '../conf/conn.php';
if (isset($_GET['userID'])) {
    $id = (int) mysqli_real_escape_string($con, $_GET['userID']);
    $id = is_numeric($id) ? $id : NULL;
    $query = 'DELETE FROM users WHERE `UserID` = ' . $id;
    $result = @mysqli_query($con, $query) or die('There is no error in the query');
}

if ($result) { ?>
    <div class="container-fluid">
        <div class="alert alert-primary text-center p-3" role="alert">
            Deleted Successfully
        </div>
        <div class="d-flex justify-content-center align-content-center mt-5">
            <img class="img-fluid" src="<?= $img ?>slide5Delete.svg" alt="">
        </div>
    </div>
<?php
    header("refresh:5; url=members.php");
    ob_end_flush();
    mysqli_close($con);
} else {
    echo '<div class="alert alert-danger" role="alert">Sorry there was an error</div>';
} ?>
<?php
include '../conf/ini.php';
include $temp . 'header.php';
include './secureHeader.php';
include '../conf/conn.php';
$id = (int) mysqli_real_escape_string($con, $_GET['id']);
$query = 'DELETE FROM `projects` WHERE `ProjectID` = ' . $id;
$result = @mysqli_query($con, $query) or die('There is no error in the query');
if ($result) { ?>
    <div class="container-fluid mt-5">
        <div class="alert alert-primary text-center p-3" role="alert">
            Deleted Successfully
        </div>
        <div class="d-flex justify-content-center align-content-center mt-5">
            <img class="img-fluid" src="<?= $img ?>slide5Delete.svg" alt="">
        </div>
    </div>
<?php
    header("refresh:5; url=index.php");
    mysqli_close($con);
} else {
    echo '<div class="alert alert-danger" role="alert">
                    Sorry there was an error
            </div>';
} ?>
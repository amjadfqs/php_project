<?php
include $temp . 'js.php';
if (empty($_SESSION)) {
    echo '<div class="alert alert-danger text-center" role="alert">
                        Please, Login first!
                        </div>';
    echo "<div class='d-flex justify-content-center'>
            <img src=' $img/notfound.svg'>
        </div>";
    exit();
} else {
    if ($_SESSION['GroupID'] != 1) {
        echo '<div class="alert alert-danger text-center" role="alert">
                    Unauthorized Access
                    </div>';
        echo "<div class='d-flex justify-content-center'>
            <img src=' $img/notfound.svg'>
        </div>";
        exit();
    }
}

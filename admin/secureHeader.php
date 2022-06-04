<?php
if (!isset($_SESSION)) {
    session_start();
    if (empty($_SESSION['GroupID'])) {
        echo '<div class="alert alert-danger text-center" role="alert">
                        Please, Login first!
                        </div>';
        exit();
    }
} else {
    if ($_SESSION['GroupID'] != 1) {
        echo '<div class="alert alert-danger text-center" role="alert">
                    Unauthorized Access
                    </div>';
        exit();
    }
}

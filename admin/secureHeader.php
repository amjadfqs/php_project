<?php
if (isset($_SESSION)) {
    if (!isset($_SESSION['GroupID'])) {
        echo '<div class="alert alert-danger text-center" role="alert">
                        Please, Login first!
                        </div>';
        exit();
    } elseif ($_SESSION['GroupID'] != 1) {

        echo '<div class="alert alert-danger text-center" role="alert">
                    Unauthorized Access
                    </div>';
        exit();
    }
} else {
    echo '<div class="alert alert-danger text-center" role="alert">
                        Please, Login first!
                        </div>';
    exit();
}

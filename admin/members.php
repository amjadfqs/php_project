<?php
$pageTitle = "Dashboard Page";
include '../conf/ini.php';
include $temp . 'header.php';
?>
<div class="container-fluid bg-secondary p-3">
    <div class="container">
        <div class="mt-4 d-flex justify-content-center justify-content-md-start">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="<?= $admin ?>users.php">Users Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="#">Projects Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted">LINKS</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end nav -->
    <div class="container">
        <div class="mt-5">
            <h1 class="text-primary">Active Page</h1>
            <div class="d-flex justify-content-center align-content-center">
                <img class="img-fluid mb-4" src="<?= $img ?>slide4.svg" alt="">
            </div>
        </div>
    </div>
</div>
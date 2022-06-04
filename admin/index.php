<?php
$pageTitle = "Dashboard Page";
include '../conf/ini.php';
include $temp . 'header.php';
include './secureHeader.php';
?>
<div class="container-fluid bg-secondary p-3">
    <div class="container">
        <div class="mt-4 d-flex justify-content-center justify-content-md-start">
            <ul class="nav nav-pills mb-3 d-flex justify-content-center justify-content-md-start" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active rounded-2 text-muted" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Active</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-2 text-muted" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">User Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-2 text-muted" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Projects Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-2 text-muted" id="pills-other-tab" data-bs-toggle="pill" data-bs-target="#pills-other" type="button" role="tab" aria-controls="pills-other" aria-selected="false">Other</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div id="container" class="container p-3">
                    <h1 class="text-primary mb-5 mb-md-4">Active Page</h1>
                    <div class="d-flex justify-content-center align-content-center">
                        <img class="img-fluid" src="<?= $img ?>slide4.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div id="container" class="container p-3">
                    <?php include 'users.php'; ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div id="container" class="container p-3">
                    <?php include 'projects.php'; ?>
                </div>
            </div>
        </div>
        <!-- end nav -->
    </div>
</div>
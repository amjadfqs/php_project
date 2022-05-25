<?php
$pageTitle = "Home Page";
include '../conf/ini.php';
include $temp . 'header.php';

?>
<div class="container mt-5">
    <div class="row g-0">
        <div class="col-md-4">
            <div class="d-flex justify-content-center">
                <a href="#">
                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"
                        width="200" height="190" class="rounded-circle"> </a>
            </div>
            <h5 class="text-center text-primary">Welcome Adham</h5>
        </div>
        <div class="col-md-8">

            <div class="row ">
                <div class="col-12 col-md-6">
                    <div class="mt-4 text-center text-sm-start">
                        <h5 class="">First Name</h5>
                        <p class="text-muted">Adham</p> <br />
                        <h5 class="">Last Name</h5>
                        <p class="text-muted">Mustafa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include $temp . 'footer.php'; ?>
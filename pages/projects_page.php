<?php
$pageTitle = "Home Page";
include './ini.php';
include $temp . 'header.php';
?>
<!-- <div class="dropdown" style="text-align: center;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false"
        data-bs-toggle="dropdown" type="button">Dropdown </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Sana'a</a>
        <a class="dropdown-item" href="#">Eden</a>
        <a class="dropdown-item" href="#">Ab</a>
    </div>
</div> -->

<main class="row row-cols-1 row-cols-md-3">
    <article class="card card-body" style="max-width: 500px;">
        <img class="card-img-top w-100 d-block fit-cover" style="height: 200px" src="mm.jpg" />
        <div class="card-body">
            <h4 class="card-title"><a href="">Lorem libero donec</a></h4>
            <p class="card-text">
                Nullam id dolor id nibh ultricies vehicula ut id elit. Cras
                justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                id elit non mi porta gravida at eget metus.
            </p>
            <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50"
                    src="header-bg.jpg" />
                <div>
                    <p class="fw-bold mb-0">John Smith</p>
                    <p class="text-muted mb-0">Erat netus</p>
                </div>
            </div>
        </div>

</main>
<?php include $temp . 'footer.php'; ?>
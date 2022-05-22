<?php
$pageTitle = "Home Page";
include './ini.php';
include $temp . 'header.php';

?>
<div class="container">
    <nav class="overflow-auto">
        <ul class="d-flex justify-content-center mt-5">
            <li class="nav-item line-before">
                <a class="nav-link text-black" href="#">Art</a>
            </li>
            <li class="nav-item line-before">
                <a class="nav-link text-black" href="#">Comics</a>
            </li>
            <li class="nav-item line-before">
                <a class="nav-link text-black" href="#">Illustration</a>
            </li>
            <li class="nav-item line-before">
                <a class="nav-link text-black" href="#">Film</a>
            </li>
            <li class="nav-item line-before">
                <a class="nav-link text-black" href="#">Design</a>
            </li>
            <li class="nav-item line-before">
                <a class="nav-link text-black" href="#">Food</a>
            </li>
            <li class="nav-item line-before">
                <a class="nav-link text-black" href="#">Music</a>
            </li>
            <li class="nav-item line-before">
                <a class="nav-link text-black" href="#">Games</a>
            </li>
        </ul>
    </nav>
</div>
<hr class="text-black-50 m-0">



<div class="container mt-5 overflow-auto">
    <div class="d-inline-flex">
        <div class="card mx-4 my-8 shadow" style="width: 80rem;">
            <!-- <img class="rounded w-100 h-100 fit-cover" style="min-height: 300px;" src="card2.png" /> -->
            <img class="card-img-top-left w-100  fit-cover" style="height: 200px" src="card2.png" />
            <div class="card-body">
                <h5 class="card-title text-primary">Donate To Educate</h5>
                <p class="card-text">The FIFTH 200 PAGE HARDBACK BOOK
                    of Lorenzo Etherington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By
                    Lorenzo Etherington of Lorenzo Etherington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By. </p>
                <div class="card-text">
                    <div class="text-muted mb-2">
                        <img class="me-2" src="<?php echo $img; ?>Card/start.svg">
                        <i>Art & Design</i>
                    </div>
                    <div class="text-muted mb-2">
                        <img class="me-2" src="<?php echo $img; ?>Card/start.svg">
                        <i>Started at: 2021-05-20</i>
                    </div>
                    <div class="text-muted">
                        <img class="me-2" src="<?php echo $img; ?>Card/location.svg">
                        <i>Sana'a,Yemen</i>
                    </div>
                    <!-- Social media -->
                </div> <br />
                <div class="container my-1">
                    <p class="text-center text-dark">Social media</p>
                    <div class="d-flex justify-content-center">
                        <a href="" class="mx-2">
                            <img style="width: 38px" src="<?php echo $img; ?>facebook.svg" alt="" />
                        </a>
                        <a href="" class="mx-2">
                            <img style="width: 40px" src="<?php echo $img; ?>twitter.svg" alt="" />
                        </a>
                        <a href="" class="mx-2">
                            <img style="width: 40px" src="<?php echo $img; ?>instagram.svg" alt="" />
                        </a>
                        <a href="" class="mx-2">
                            <img style="width: 37px" src="<?php echo $img; ?>whatsapp.svg" alt="" />
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <br /><br /><br /><br>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    </div>


    <?php include $temp . 'footer.php'; ?>
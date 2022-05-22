<?php
$pageTitle = "Home Page";
include './ini.php';
include $temp . 'header.php';
?>
<div class="container ">
    <nav class="overflow-auto ">
        <ul class="d-flex justify-content-center mt-5">
            <li class="nav-item line-before">
                <a class="nav-link text-black " href="#">Art</a>
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
<hr class="d-sm-none d-md-block text-black-50 m-0">

<!-- Carousel -->
<div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-primary" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="bg-primary" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="bg-primary" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item mb-5 active" data-bs-interval="10000">
                <div class="container mt-lg-5">
                    <div class="row">
                        <div class="col mt-5 text-center text-sm-start">
                            <h1 class="mt-5"> Get funded now </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing <br />e
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                <br /> Lorem ipsum consectetur adipisicing ?
                            </p>
                            <a class="btn btn-primary mt-3" role="button" href="#">Start a project</a>
                        </div>
                        <!-- to break between them -->
                        <div class="col-md-auto my-3">
                        </div>
                        <!-- to break between them -->
                        <div class="col active">
                            <img class="w-100 img-fluid" src="<?php echo $img; ?>slide3.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item mb-5" data-bs-interval="2000">
                <div class="container mt-lg-5">
                    <div class="row">
                        <div class="col mt-5 text-center text-sm-start">
                            <h1 class="mt-5"> Funding projects </h1>
                            <p class="g-sm-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing <br />e
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                <br /> Lorem ipsum consectetur adipisicing ?
                            </p>
                            <a class="btn btn-primary mt-3" role="button" href="#">Founding project now</a>
                        </div>
                        <div class="col-md-auto my-5">
                        </div>
                        <div class="col">
                            <img class="w-100 img-fluid" src="<?php echo $img; ?>slide2.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item mb-5">
                <!-- content -->
                <div class="container mt-lg-5">
                    <div class="row">
                        <div class="col mt-5 text-center text-sm-start">
                            <h1 class="mt-5 "> User view </h1>
                            <p class="">
                                Lorem ipsum dolor sit amet consectetur adipisicing <br />e
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                <br /> Lorem ipsum consectetur adipisicing ?
                            </p>
                            <a class="btn btn-primary mt-3" role="button" href="#">Learn more</a>
                        </div>
                        <div class="col-md-auto my-5">
                        </div>
                        <div class="col">
                            <img class="w-100 img-fluid" src="<?php echo $img; ?>slide1.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of Carousel -->
<!-- funding info -->
<div class="container-fluid bg-secondary mt-5">
    <div class="container">
        <div class="p-2">
            <h1 class="mt-5 color-a text-center">Information About Fundation</h1>
            <p class="text-muted my-3 text-center">Creative work shows us what’s possible.
                Help fund it here.</p>
        </div>
        <div class="container text-center">
            <div class="d-xl-flex d-lg-flex d-md-flex justify-content-evenly d-sm-block d-xs-block">
                <!-- 1 -->
                <div class="my-5">
                    <img src="<?php echo $img; ?>fund/funded.svg" alt="">
                    <p class="my-3"><span class="color-a">30</span> funded</p>
                </div>
                <!-- 2 -->
                <div class="my-5">
                    <img src="<?php echo $img; ?>fund/funders.svg" alt="">
                    <p class="my-3"><span class="color-a">30</span> Funders</p>
                </div>
                <!-- 3 -->
                <div class="my-5 pb-5">
                    <img src="<?php echo $img; ?>fund/Likes.svg" alt="">
                    <p class="my-3"><span class="color-a">30</span> Likes</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end funding info-->

<!-- starting Card -->
<div class="container mt-5 overflow-auto">
    <div class="d-inline-flex">
        <div class="card mx-2 my-4 shadow" style="width: 20rem;">
            <a href="#"><img src="<?php echo $img; ?>card1.svg" class="card-img-top" alt=""></a>
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
                        <i>Taizz,Yemen</i>
                    </div>
                </div> <br />
                <span class="">By<a href="#" class="mx-1 text-primary">Adham Mustafa</a></span>
            </div>
        </div>
        <div class="card mx-2 my-4 shadow" style="width: 20rem;">
            <a href="#"><img src="<?php echo $img; ?>card1.svg" class="card-img-top" alt=""></a>
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
                        <i>Taizz,Yemen</i>
                    </div>
                </div> <br />
                <span class="">By<a href="#" class="mx-1 text-primary">Adham Mustafa</a></span>
            </div>
        </div>
        <div class="card mx-2 my-4 shadow" style="width: 20rem;">
            <a href="#"><img src="<?php echo $img; ?>card1.svg" class="card-img-top" alt=""></a>
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
                        <i>Taizz,Yemen</i>
                    </div>
                </div> <br />
                <span class="">By<a href="#" class="mx-1 text-primary">Adham Mustafa</a></span>
            </div>
        </div>
        <div class="card mx-2 my-4 shadow" style="width: 20rem;">
            <a href="#"><img src="<?php echo $img; ?>card1.svg" class="card-img-top" alt=""></a>
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
                        <img class="me-2" src="<?= $img; ?>Card/start.svg">
                        <i>Art & Design</i>
                    </div>
                    <div class="text-muted mb-2">
                        <img class="me-2" src="<?php echo $img; ?>Card/start.svg">
                        <i>Started at: 2021-05-20</i>
                    </div>
                    <div class="text-muted">
                        <img class="me-2" src="<?php echo $img; ?>Card/location.svg">
                        <i>Taizz,Yemen</i>
                    </div>
                </div> <br />
                <span class="">By<a href="#" class="mx-1 text-primary">Adham Mustafa</a></span>
            </div>
        </div>
        <div class="card mx-2 my-4 shadow" style="width: 20rem;">
            <a href="#"><img src="<?php echo $img; ?>card1.svg" class="card-img-top" alt=""></a>
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
                        <i>Taizz,Yemen</i>
                    </div>
                </div> <br />
                <span class="">By<a href="#" class="mx-1 text-primary">Adham Mustafa</a></span>
            </div>
        </div>
    </div>
</div>
<!-- end the card -->

<!-- best funders -->
<div class="backgroundForFunders">
    <div>


    </div>
</div>
<!-- end of  best funders -->
<?php include $temp . 'footer.php'; ?>
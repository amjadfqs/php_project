<?php
$pageTitle = "Home Page";
include '../conf/ini.php';
include $temp . 'header.php';

?>
<div class="container text-center">
    <nav class="overflow-auto">
        <ul class="d-inline-flex mt-5">
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
<hr class="d-sm-none d-md-block text-black-50 m-0">

<!-- Carousel -->
<div class="d-none d-md-block">
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
                                Lorem ipsum dolor sit Lorem ipsum dolor sit <br />e
                                Lorem ipsum dolor sit Lorem ipsum dolor sit
                                <br /> Lorem ipsum Lorem ipsum dolor sit ?
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
                                Lorem ipsum dolor sit Lorem ipsum dolor sit <br />e
                                Lorem ipsum dolor sit Lorem ipsum dolor sit
                                <br /> Lorem ipsum Lorem ipsum dolor sit ?
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
                                Lorem ipsum dolor sit Lorem ipsum dolor sit <br />e
                                Lorem ipsum dolor sit Lorem ipsum dolor sit
                                <br /> Lorem ipsum Lorem ipsum dolor sit ?
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
<!--  Carousel for small screen -->

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="container d-md-none">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col active">
                            <img class="w-100 img-fluid" src="<?php echo $img; ?>slide3.svg">
                        </div>
                        <!-- to break between them -->
                        <div class="col-md-auto">
                        </div>
                        <!-- to break between them -->
                        <div class="col mt-5 text-center text-sm-start">
                            <h1> Get funded now </h1>
                            <p>
                                Lorem ipsum dolor sit Lorem ipsum dolor sit <br />e
                                Lorem ipsum dolor sit Lorem ipsum dolor sit
                                <br /> Lorem ipsum Lorem ipsum dolor sit ?
                            </p>
                            <a class="btn btn-primary" role="button" href="#">Start a project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <img class="w-100 img-fluid" src="<?php echo $img; ?>slide2.svg">
                        </div>
                        <div class="col-md-auto">
                        </div>
                        <div class="col mt-5 text-center text-sm-start">
                            <h1> Funding projects </h1>
                            <p>
                                Lorem ipsum dolor sit Lorem ipsum dolor sit <br />e
                                Lorem ipsum dolor sit Lorem ipsum dolor sit
                                <br /> Lorem ipsum Lorem ipsum dolor sit ?
                            </p>
                            <a class="btn btn-primary" role="button" href="#">Founding project now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <img class="w-100 img-fluid" src="<?php echo $img; ?>slide1.svg">
                        </div>
                    </div>
                    <div class="col-md-auto">
                    </div>
                    <div class="col mt-5 text-center text-sm-start">
                        <h1> User view </h1>
                        <p>
                            Lorem ipsum dolor sit Lorem ipsum dolor sit <br />e
                            Lorem ipsum dolor sit Lorem ipsum dolor sit
                            <br /> Lorem ipsum Lorem ipsum dolor sit ?
                        </p>
                        <a class="btn btn-primary" role="button" href="#">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!--  end Carousel for small screen -->

<!-- funding info -->
<div class="container-fluid bg-secondary mt-5">
    <div class="container">
        <div class="p-2">
            <h1 class="mt-5 color-a text-center">Information About Foundation</h1>
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
            <a href="#"><img src="<?php echo $img; ?>card2.jpg" class="card-img-top" alt=""></a>
            <div class="card-body">
                <h5 class="card-title text-primary">Donate To Educate</h5>
                <p class="card-text">The FIFTH 200 PAGE HARDBACK BOOK
                    of Lorenzo Sherrington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By
                    Lorenzo Sherrington of Lorenzo Sherrington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By. </p>
                <div class="card-text">
                    <div class="text-muted mb-2">
                        <i class="fas fa-tags fa-flip-horizontal"></i>
                        Art & Design
                    </div>
                    <div class="text-muted mb-2">
                        <i class="fas fa-clock"></i>
                        Started at: 2021-05-20
                    </div>
                    <div class="text-muted">
                        <i class="fas fa-location-arrow"></i>
                        Taizz,Yemen
                    </div>
                </div> <br />
                <span class="">By<a href="#" class="mx-1 text-primary">Adham Mustafa</a></span>
            </div>
        </div>
        <div class="card mx-2 my-4 shadow" style="width: 20rem;">
            <a href="#"><img src="<?php echo $img; ?>card2.jpg" class="card-img-top" alt=""></a>
            <div class="card-body">
                <h5 class="card-title text-primary">Donate To Educate</h5>
                <p class="card-text">The FIFTH 200 PAGE HARDBACK BOOK
                    of Lorenzo Sherrington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By
                    Lorenzo Sherrington of Lorenzo Sherrington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By. </p>
                <div class="card-text">
                    <div class="text-muted mb-2">
                        <i class="fas fa-tags fa-flip-horizontal"></i>
                        Art & Design
                    </div>
                    <div class="text-muted mb-2">
                        <i class="fas fa-clock"></i>
                        Started at: 2021-05-20
                    </div>
                    <div class="text-muted">
                        <i class="fas fa-location-arrow"></i>
                        Taizz,Yemen
                    </div>
                </div> <br />
                <span class="">By<a href="#" class="mx-1 text-primary">Adham Mustafa</a></span>
            </div>
        </div>
        <div class="card mx-2 my-4 shadow" style="width: 20rem;">
            <a href="#"><img src="<?php echo $img; ?>card2.jpg" class="card-img-top" alt=""></a>
            <div class="card-body">
                <h5 class="card-title text-primary">Donate To Educate</h5>
                <p class="card-text">The FIFTH 200 PAGE HARDBACK BOOK
                    of Lorenzo Sherrington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By
                    Lorenzo Sherrington of Lorenzo Sherrington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By. </p>
                <div class="card-text">
                    <div class="text-muted mb-2">
                        <i class="fas fa-tags fa-flip-horizontal"></i>
                        Art & Design
                    </div>
                    <div class="text-muted mb-2">
                        <i class="fas fa-clock"></i>
                        Started at: 2021-05-20
                    </div>
                    <div class="text-muted">
                        <i class="fas fa-location-arrow"></i>
                        Taizz,Yemen
                    </div>
                </div> <br />
                <span class="">By<a href="#" class="mx-1 text-primary">Adham Mustafa</a></span>
            </div>
        </div>
        <div class="card mx-2 my-4 shadow" style="width: 20rem;">
            <a href="#"><img src="<?php echo $img; ?>card2.jpg" class="card-img-top" alt=""></a>
            <div class="card-body">
                <h5 class="card-title text-primary">Donate To Educate</h5>
                <p class="card-text">The FIFTH 200 PAGE HARDBACK BOOK
                    of Lorenzo Sherrington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By
                    Lorenzo Sherrington of Lorenzo Sherrington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By. </p>
                <div class="card-text">
                    <div class="text-muted mb-2">
                        <i class="fas fa-tags fa-flip-horizontal"></i>
                        Art & Design
                    </div>
                    <div class="text-muted mb-2">
                        <i class="fas fa-clock"></i>
                        Started at: 2021-05-20
                    </div>
                    <div class="text-muted">
                        <i class="fas fa-location-arrow"></i>
                        Taizz,Yemen
                    </div>
                </div> <br />
                <span class="">By<a href="#" class="mx-1 text-primary">Adham Mustafa</a></span>
            </div>
        </div>
        <div class="card mx-2 my-4 shadow" style="width: 20rem;">
            <a href="#"><img src="<?php echo $img; ?>card2.jpg" class="card-img-top" alt=""></a>
            <div class="card-body">
                <h5 class="card-title text-primary">Donate To Educate</h5>
                <p class="card-text">The FIFTH 200 PAGE HARDBACK BOOK
                    of Lorenzo Sherrington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By
                    Lorenzo Sherrington of Lorenzo Sherrington HOW TO THINK
                    WHEN YOU DRAW series + reprinting
                    ALL original SOLD OUT BOOKS! By. </p>
                <div class="card-text">
                    <div class="text-muted mb-2">
                        <i class="fas fa-tags fa-flip-horizontal"></i>
                        Art & Design
                    </div>
                    <div class="text-muted mb-2">
                        <i class="fas fa-clock"></i>
                        Started at: 2021-05-20
                    </div>
                    <div class="text-muted">
                        <i class="fas fa-location-arrow"></i>
                        Taizz,Yemen
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
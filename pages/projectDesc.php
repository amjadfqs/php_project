<?php
$pageTitle = "Home Page";
include './ini.php';
include $temp . 'header.php';

?>
<hr class="text-black-50 m-0">


<div class="d-none d-md-block container text-center my-5 p-3 k">
    <h2 class="text-primary">A Thriving Home for A Fountain for Survivors</h2>
    <hr class="m-0 text-black-50">
</div>

<div class="container mt-4">
    <div class="row d-flex align-content-md-center align-items-md-center">
        <div class="col-sm-12 col-md-9">
            <img class="w-100 w-md-75" src=" <?= $img; ?>card2.png" />
            <div class="mt-2 text-black-50 d-flex justify-content-center d-md-inline-block">
                <a class="mx-2 text-decoration-none text-black-50">
                    <img style="width: 20px" src="<?php echo $img; ?>facebook-brands.svg" alt="" />
                    <span class="d-none d-md-inline-block">Facebook</span>
                </a>
                <a class="mx-2 text-decoration-none text-black-50">
                    <img style="width: 20px" src="<?php echo $img; ?>twitter-brands.svg" alt="" />
                    <span class="d-none d-md-inline-block">Twitter</span>
                </a>
                <a class="mx-2 text-decoration-none text-black-50">
                    <img style="width: 20px" src="<?php echo $img; ?>instagram-brands.svg" alt="" />
                    <span class="d-none d-md-inline-block">Instagram</span>

                </a>
                <a class="mx-2 text-decoration-none text-black-50">
                    <img style="width: 20px" src="<?php echo $img; ?>whatsapp-brands.svg" alt="" />
                    <span class="d-none d-md-inline-block">Whatsapp</span>
                </a>
            </div>
        </div>
        <div class="d-sm-block d-md-none container text-center my-3 p-3">
            <h5 class="text-dark">A Thriving Home for A Fountain for Survivors</h5>
        </div>
        <div class="col-sm-12 col-md-3 d-flex justify-content-center">
            <div class="card shadow" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        <span class="text-primary">$</span>The Price <br />
                        <small class="card-subtitle">pledged of US$ 26,000 goal</small>
                    </h5>
                    <p class="card-text">The FIFTH 200 PAGE HARDBACK BOOK
                        of Lorenzo Etherington HOW TO THINK
                        WHEN YOU DRAW series + reprinting
                        ALL original SOLD OUT BOOKS! By
                        Lorenzo Etherington of Lorenzo Etherington HOW TO THINK
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
</div>


</div>
</div>




<br />
<div class="container-fluid bg-secondary mt-5 p-3">
    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>
    </div>
</div>


<?php include $temp . 'footer.php'; ?>
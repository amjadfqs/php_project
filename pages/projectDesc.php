<?php
$pageTitle = "Home Page";
include '../conf/ini.php';
include $temp . 'header.php';
include '../conf/conn.php';

if (isset($_GET['id'])) {
    $id = (int) mysqli_real_escape_string($con, $_GET['id']);
    $id = is_numeric($id) ? $id : NULL;
    $query = "SELECT * FROM `projects` WHERE ProjectID = " . $id;
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $rows = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($con);
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">
                    Sorry, there is no data to display </div>';
        echo "<div class='d-flex justify-content-center'>
            <img src=' $img/notfound.svg'>
        </div>";
        exit();
    }
} else {
    echo '<div class="alert alert-danger text-center" role="alert">
                    Sorry, there is no data to display </div>';
    echo "<div class='d-flex justify-content-center'>
            <img src=' $img/notfound.svg'>
        </div>";
    exit();
}
?>
<div class="d-none d-md-block container text-center my-5 p-3">
    <h2 class="text-primary">
        <?= $rows['Title']; ?>
    </h2>
    <hr class="m-0 text-black-50">
</div>

<div class="container mt-4">
    <div class="row d-flex align-content-md-center align-items-md-center">
        <div class="col-sm-12 col-md-9">
            <?php if (empty($rows['VidURL'])) : ?>
                <img class="col-12 col-md-9" src="../data/uploads/images/<?= $rows['Picture']; ?>" /><br />
            <?php else :
                $url = $rows['VidURL'];
                parse_str(parse_url($url, PHP_URL_QUERY), $my_url);
            ?>
                <iframe width="640" height="400" src="https://www.youtube.com/embed/<?= $my_url['v']; ?>" class="col-12 col-md-9" frameborder="0" allowfullscreen>
                </iframe> <br />
            <?php endif; ?>
            <div class="mt-5 text-black-50 d-flex justify-content-center align-items-center d-md-inline-block">
                <!-- <a class="mx-2 text-decoration-none text-black-50">
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
                </a> -->
                <small>Content us:</small>
                <a href="https://wa.me/<?= $rows['Contact']; ?>" class="mx-2 text-decoration-none text-black-50">
                    <img style="width: 20px" src="<?php echo $img; ?>whatsapp-brands.svg" alt="" />
                    <span class="d-none d-md-inline-block">Whatsapp</span>
                </a>
            </div>
        </div>
        <div class="d-sm-block d-md-none container text-center my-3 p-3">
            <h5 class="text-dark"><?php echo htmlspecialchars($rows['Title']); ?></h5>
        </div>
        <div class="col-sm-12 col-md-3 d-flex justify-content-center">
            <div class="card shadow" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        The Price <span class="text-primary">$</span><?php echo htmlspecialchars($rows['Cost']); ?>
                        <br />
                        <!-- <small class="card-subtitle">pledged of US$ 26,000 goal</small> -->
                    </h5>
                    <p class="card-text">
                        <?php echo htmlspecialchars_decode($rows['BriefDesc']); ?>
                    </p>
                    <div class="card-text">
                        <div class="text-muted mb-2">
                            <i class="fas fa-tags fa-flip-horizontal"></i>
                            <?php echo htmlspecialchars_decode($rows['Tag']); ?>
                        </div>
                        <div class="text-muted mb-2">
                            <i class="fas fa-clock"></i>
                            <span>Started At</span>
                            <?php echo htmlspecialchars_decode($rows['Created']); ?>
                        </div>
                        <div class="text-muted">
                            <i class="fas fa-location-arrow"></i>
                            <span>Yemen, </span><?php echo htmlspecialchars_decode($rows['City']); ?>
                        </div>
                    </div> <br />
                </div>
            </div>
        </div>

    </div>
</div>
<br />
<div class="container-fluid bg-secondary mt-5 p-3">
    <div class="container bg-white">
        <ul class="nav nav-pills mb-3 d-flex justify-content-center justify-content-md-start" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active rounded-0" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Campaign</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-0" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Updates</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-0" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Comments</button>
            </li>
        </ul>
        <!-- campaign -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="d-none d-md-block col-md-4">
                        <!-- Scrollspy -->
                        <div id="list-example" class="sticky-top d-flex justify-content-center" style="padding-top:5rem;">
                            <ul class="nav flex-column nav-pills menu-sidebar">
                                <a class="nav-link" href="#list-1">Story</a>
                                <a class="nav-link" href="#list-2">Risks</a>
                            </ul>
                        </div>
                        <!-- Scrollspy -->
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="scrollspy-example">
                            <div id="list-1">
                                <h2>Story</h2>
                                <div class="" style="word-wrap:break-word;">
                                    <?php echo htmlspecialchars_decode($rows['Story']); ?>
                                </div>
                            </div>
                            <div id="list-2">
                                <h2>Risks</h2>
                                <p style="word-wrap:break-word;">
                                    <?php echo htmlspecialchars($rows['Risk']); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- end composite -->
            <!-- UPdates -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div id="container" class="container p-3">
                    <p class="text-black-50">UPDATE#1</p>
                    <h5>All About Engravings </h5>
                    <hr class=" text-black-20">
                    <p class="text-center">We've had a few questions about engravings when purchasing multiple
                        Cuffs.
                        And, we have some good news for you. If you select the engraving and purchase multiple
                        Cuffs,
                        we'll offer engravings on all of your Cuffs. Once the campaign has ended, we'll send out a
                        survey to collect your engravings for your Cuffs and your shipping address—so you have some
                        time
                        to think!
                        <br />
                        In the meantime, here's some information on what we can and can't engrave:
                        <br />
                        - You can engrave up to 5 characters on the ICON and 7 on the ID Cuffs.
                        <br />
                        - Unfortunately, at this time, we are currently unable to engrave emojis, other symbols,
                        images,
                        or non-standard English alphabet or languages.
                        <br />
                        If you have any further questions about engravings, let us know!
                    </p>
                </div>
            </div>
            <!-- end UPdates -->

            <!-- comment -->
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <?php if (isset($_COOKIE['user'])) : ?>
                    <div class="d-none d-flex justify-content-center">
                        <p>Only logged in users can comment</p>
                        <a class="mx-2" href="<?= $pages ?>logout.php"> Login </a>
                    </div>
                    <div class="mt-5">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>
                <?php else : ?>
                    <div class=" d-flex justify-content-center">
                        <p>Only logged in users can comment</p>
                        <a class="mx-2" href="<?= $pages ?>logout.php"> Login </a>
                    </div>
                    <div class="mt-5 d-none">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    <?php endif ?>
                    </div>
            </div>
            <!-- end comments -->
        </div>
    </div>
</div>


<?php include $temp . 'footer.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Default" ?></title>
    <link rel="stylesheet" href="<?php echo $css; ?>main.min.css" />
    <link rel="stylesheet" href="<?php echo $css; ?>style.css" />
</head>

<body id="HDbody">
    <nav id="navbar" class="navbar navbar-light navbar-expand-md border-3">
        <div class="container d-flex justify-content-between">
            <?php if (isset($_COOKIE['user'])) : ?>
                <div class="dropdown d-md-none d-sm-flex justify-content-sm-end align-content-sm-end">
                    <a class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle"> -->
                        <i class="far fa-user-circle fa-2x"></i>
                    </a>
                    <ul class="dropdown-menu mt-1 text-center" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Profile<i class="fas fa-user ms-3"></i></a></li>
                        <li><a class="dropdown-item" href="<?= $pages ?>logout.php">Logout <i class="fas fa-sign-out-alt ms-2"></i></a></li>
                    </ul>
                </div>
            <?php endif ?>
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="50" viewBox="0 0 57 58">
                        <path id="logo" d="M19.294,7.156a15,15,0,0,1,18.412,0l11.15,8.667A15,15,0,0,1,54,32.025L49.346,47.359A15,15,0,0,1,34.993,58H22.007A15,15,0,0,1,7.654,47.359L3,32.025a15,15,0,0,1,5.147-16.2Z" fill="#4dd5ac" />
                    </svg>
                </span>
                HASH
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-4">
                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>

            <div id="navcol-4" class="collapse navbar-collapse flex-grow-0 order-md-first">
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item ">
                        <a id="SpecialItem" class="nav-link text-black" href="<?= $pages ?>projects.php"> Discover</a>
                    </li>
                    <li class="nav-item">
                        <a id="SpecialItem" class="nav-link text-black" href="#">Search</a>
                    </li>
                </ul>
                <!-- bottom for small screen -->
                <div class="d-md-none my-2 text-center">
                    <a id="SpecialBtn" class="btn btn-primary me-2" type="button" href="<?= $pages; ?> login.php">Login</a>
                    <a id="SpecialBtn" class="btn btn-primary" type="button">Start a project</a>
                </div>
            </div>
            <!-- end of bottom for small screen-->
            <!--bottom for lg and md screen   -->

            <div class="d-none d-md-block">
                <a id="SpecialBtn" class="btn btn-primary rounded-pill" type="button" href="<?= $pages ?>login.php">Login</a>
                <a id="SpecialBtn" class="btn btn-primary rounded-pill" type="button" href="#">Start a project</a>
                <!-- profile -->
                <?php if (isset($_COOKIE['user'])) : ?>
                    <span class="dropdown">
                        <a class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <i class="far fa-user-circle fa-2x"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-3 text-center">
                            <li><a class="dropdown-item" href="#">Profile<i class="fas fa-user ms-3"></i></a></li>
                            <li><a class="dropdown-item" href="<?= $pages ?>logout.php">Logout <i class="fas fa-sign-out-alt ms-2"></i></a></li>
                        </ul>
                    </span>
                <?php endif ?>
            </div>
            <!--end of bottom for lg and md screen   -->
        </div>
    </nav>
    </nav>
    <hr class="m-0 text-black-50">
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
  <nav id="navbar" class="navbar navbar-light navbar-expand-md border-3 bg-white">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg class="bi bi-bezier" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
            <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
          </svg></span>
        HASH
      </a>
      <?php if (isset($_COOKIE['user'])) : ?>
        <div class="dropdown d-md-none d-sm-flex justify-content-sm-end align-content-sm-end">
          <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
          </a>
          <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Profile<i class="fas fa-user ms-3"></i></a></li>
            <li><a class="dropdown-item" href="<?= $pages ?>logout.php">Logout <i class="fas fa-sign-out-alt ms-2"></i></a></li>
          </ul>
        </div>
      <?php endif ?>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-4">
        <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
      </button>

      <div id="navcol-4" class="collapse navbar-collapse flex-grow-0 order-md-first">
        <ul class="navbar-nav me-auto">
          <li class="nav-item ">
            <a class="nav-link text-black" href="<?= $pages ?>projects.php"> Discover</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="#">Search</a>
          </li>
        </ul>
        <!-- botton for small screen -->
        <div class="d-md-none my-2">
          <a class="btn btn-primary me-2" type="button" href="<?= $pages; ?> login.php">Login</a>
          <a class="btn btn-primary" type="button">Start a project</a>
        </div>
      </div>
      <!-- end of botton for small screen-->
      <!--botton for lg and md screen   -->

      <div class="d-none d-md-block">
        <a class="btn btn-primary me-2" type="button" href="<?= $pages ?>login.php">Login</a>
        <a class="btn btn-primary" role="button" href="#">Start a project</a>
        <!-- profile -->
        <?php if (isset($_COOKIE['user'])) : ?>
          <span class="dropdown">
            <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
            </a>
            <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Profile<i class="fas fa-user ms-3"></i></a></li>
              <li><a class="dropdown-item" href="<?= $pages ?>logout.php">Logout <i class="fas fa-sign-out-alt ms-2"></i></a></li>
            </ul>
          </span>
        <?php endif ?>
      </div>
      <!--end of botton for lg and md screen   -->
    </div>
  </nav>
  </nav>
  <hr class="m-0 text-black-50">
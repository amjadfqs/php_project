<!DOCTYPE html>
<html>

<head>
  <title><?php echo isset($pageTitle) ? $pageTitle : "Default" ?></title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="<?php echo $css; ?>main.min.css" />
  <link rel="stylesheet" href="<?php echo $css; ?>style.css" />
</head>

<body id="HDbody" class="bg-secondary">
  <!-- navbar -->
  <nav id="navbar" class=" shadow navbar navbar-expand-md navbar-light bg-primary mb-5">
    <div class="container-xxl ">
      <!-- navbar brand / title -->
      <a class=" navbar-brand" href="index.php">
        <img src="<?php echo $img; ?>facebook.svg"></img>
        <span class="fw-bolder">Name</apan>
      </a>
      <!-- toggle button for mobile nav -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- navbar links -->
      <div class="collapse navbar-collapse ps-5 " id="main-nav">
        <ul class="navbar-nav text-center text-dark">
          <li class="nav-item">
            <a class="nav-link " href="#topics">Explore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reviews">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">About Us</a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link" href="#pricing">Sign Up</a>
          </li>
          <li class="nav-item  ms-2 d-none d-md-inline">
            <a class="btn btn-outline-dark rounded-pill" href="">Sign Up</a>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav d-sm-none d-md-inline-flex ml-auto mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img style="width:15px" , src="<?php echo $img; ?>facebook-brands.svg"></img><span class="d-md-none ml-3">Facebook</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img style="width:15px" , src="<?php echo $img; ?>twitter-brands.svg"></img><span class="d-md-none ml-3">Twitter</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img style="width:15px" , src="<?php echo $img; ?>instagram-brands.svg"></img><span class="d-md-none ml-3">Instagram</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img style="width:15px" , src="<?php echo $img; ?>whatsapp-brands.svg"></img><span class="d-md-none ml-3">Whatsapp</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
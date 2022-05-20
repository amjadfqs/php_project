<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? $pageTitle : "Default" ?></title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="<?php echo $css; ?>main.min.css" />
  <link rel="stylesheet" href="<?php echo $css; ?>style.css" />
</head>

<body id="HDbody">
  <nav id="navbar" class="navbar navbar-light navbar-expand-md border-3 bg-white">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <span> <img class="mb-2 me-2 img-fluid" src="<?php echo $img; ?>logo.svg">HASH</span>
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-4">
        <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div id="navcol-4" class="collapse navbar-collapse flex-grow-0 order-md-first">
        <ul class="navbar-nav me-auto">
          <li class="nav-item text-center">
            <a class="nav-link text-black" href="#">Discover</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link text-black" href="#">Search</a>
          </li>
        </ul>
        <!-- botton for small screen -->
        <div class="d-md-none my-2 d-flex justify-content-center">
          <button class="btn btn-primary me-2 " type="button">Login</button>
          <button class="btn btn-primary" type="button">Start a project</button>
        </div>
      </div>
      <!-- end of botton for small screen-->
      <!--botton for lg and md screen   -->
      <div class="d-none d-md-block">
        <button class="btn btn-primary me-2 rounded-pill" type="button">Login</button>
        <a class="btn btn-primary rounded-pill" role="button" href="#">Start a project</a>
      </div>
      <!--end of botton for lg and md screen   -->
    </div>
  </nav>
  </nav>
  <hr class="m-0 text-black-50">
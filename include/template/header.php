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
  <nav class="navbar navbar-light navbar-expand-md py-3">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
          <svg class="bi bi-bezier" xmlns="http://www.w3.org/2000/svg" width="30" height="58" viewBox="0 0 57 58">
            <path id="logo" d="M19.294,7.156a15,15,0,0,1,18.412,0l11.15,8.667A15,15,0,0,1,54,32.025L49.346,47.359A15,15,0,0,1,34.993,58H22.007A15,15,0,0,1,7.654,47.359L3,32.025a15,15,0,0,1,5.147-16.2Z" fill="#4dd5ac" />
          </svg>
        </span>
        <span>HASH</span>
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-4">
        <span class="visually-hidden">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navcol-4" class="collapse navbar-collapse flex-grow-0 order-md-first">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link active" href="<?= $pages ?>projects.php" target="_blank">Discover</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Search</a></li>
        </ul>
        <div class="d-md-none my-2">
<<<<<<< Updated upstream
          <button class="btn btn-primary me-2 my-2" type="button">Login</button> <br />
=======
          <button class="btn btn-primary me-2" type="button">Login</button> <br />
>>>>>>> Stashed changes
          <button class="btn btn-primary" type="button">Start a project</button>
        </div>
      </div>
      <div class="d-none d-md-block">
        <button class="btn btn-primary me-2" type="button">Login</button>
        <a class="btn btn-primary" role="button" href="#">Start a project</a>
      </div>
    </div>
  </nav>
  <hr class="m-0 text-black-50">
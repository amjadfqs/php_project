  <?php
  $pageTitle = "Home Page";
  include './ini.php';
  include $temp . 'header.php';


  $Uname = $pass = $inger = '';
  $errors = array('Uname' => '', 'pass' => '', 'inger' => '');
  ?>

  <!-- Pills navs -->
  <div class="d-flex justify-content-center row w-100">
    <div class="border shadow-lg p-3 mb-5 bg-body rounded row justify-content-center p-3 my-2 bg-light col-sm-6 col-md-3">
      <h2 class="text-dark pb-2 mb-4 text-center">Login</h2>
      <div class="col-lg-12">
        <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
          <label for="Uname" class="form-label">User Name:</label>
          <div class="input-group">
            <span class="input-group-text">
              <i class="fas fa-user text-muted"></i>
            </span>
            <input name="Uname" type="text" id="Uname" class="form-control" value="<?php echo htmlspecialchars($Uname); ?>" />
            <!-- tooltip -->
            <span class="input-group-text">
              <span class="tt" data-bs-placement="bottom" title="Enter an your user name that you registered with">
                <i class="far fa-question-circle text-muted"></i>
              </span>
            </span>
          </div>
          <!-- <div class="h6 text-danger mb-3"><?php echo $errors['Uname']; ?></div> -->

          <label for="pass" class="mt-2 form-label">Password:</label>
          <div class="input-group">
            <span class="input-group-text">
              <i class="fas fa-lock text-muted"></i>
            </span>
            <input name="pass" type="text" id="pass" class="form-control" value="" />
            <!-- tooltip -->
            <span class="input-group-text">
              <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really...">
                <i class="far fa-question-circle text-muted"></i>
              </span>
            </span>
          </div>
          <!-- <div class="h6 text-danger mb-3"><?php echo $errors['pass']; ?></div> -->
          <div class="mt-4 mb-2 shadow text-center">
            <button type="submit" name="submit" vlaue="submit" class="btn btn-primary text-secondary w-100">Login</button>
          </div>
          <div class="text-center">
            <p>Don't have an account? <a href="#!">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script>
    const tooltips = document.querySelectorAll('.tt')
    tooltips.forEach(t => {
      new bootstrap.Tooltip(t)
    })
  </script>
  <!-- Pills content -->
  <?php include $temp . 'footer.php'; ?>
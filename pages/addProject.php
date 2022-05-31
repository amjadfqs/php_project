<?php
$pageTitle = "Home Page";
include '../conf/ini.php';
include '../conf/conn.php';
include $temp . 'header.php';

$title = $cost = $url = $picture = $story = $brief =  $risk = $city = $tag = $phone = '';
$errors = array('title' => '', 'cost' => '', 'url' => '', 'picture' => '', 'story' => '', 'brief' => '', 'risk' => '', 'city' => '', 'tag' => '', 'phone' => '');

if (isset($_POST['submit'])) {
    if (empty(trim($_POST['title']))) {
        $errors['title'] = 'Sorry The name is required';
    } else {
        $title = mysqli_real_escape_string($con, trim($_POST['title']));
    }
    if (empty($trim($_POST['cost']))) {
        $errors['cost'] = 'Sorry The cost is required';
    } else {
        $cost = mysqli_real_escape_string($con, trim($_POST['cost']));
    }
    if (isset($_POST['picture'])) {
        //////
    } else {
        /////
    }
    if (empty($trim($_POST['story']))) {
        $errors['story'] = 'Sorry The story is required';
    } else {
        $story = mysqli_real_escape_string($con, $_POST['story']);
    }
    if (empty($trim($_POST['brief']))) {
        $errors['brief'] = 'Sorry The brief is required';
    } else {
        $brief = mysqli_real_escape_string($con, $_POST['brief']);
    }
    if (empty($trim($_POST['risk']))) {
        $errors['risk'] = 'Sorry The risk is required';
    } else {
        $risk = mysqli_real_escape_string($con, $_POST['risk']);
    }
    if (!isset($_POST['city'])) {
        $errors['city'] = 'Sorry The city is required';
    }
    if (!isset($_POST['tag'])) {
        $errors['tag'] = 'Sorry The tag is required';
    }
    if (empty(trim($_POST['num']))) {
        $errors['num'] = 'Sorry The number is required';
    } else {
        $num = mysqli_real_escape_string($con, trim($_POST['num']));
    }

    if (array_filter($errors)) {
    } else {
        $url = mysqli_real_escape_string($con, trim($_POST['url']));
    }
}
?>

<div class="container my-5">
    <div class="d-flex justify-content-center">
        <div class="border shadow-lg p-3 mb-5 rounded my-2 bg-light">
            <h2 class=" text-muted pb-2 mb-4 text-center b">Add Your Project</h2>
            <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
                <!-- First Row -->
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-4">
                        <label for="title" class="form-label">Project Title:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-heading text-muted"></i>
                            </span>
                            <input name="title" type="text" id="title" class="form-control" value="<?= htmlspecialchars($title) ?>" />
                            <!-- tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom" title="Enter your project Tile">
                                    <i class="far fa-question-circle text-muted"></i>
                                </span>
                            </span>
                        </div>
                        <div class="h6 text-danger mb-3"><?php echo $errors['title']; ?></div>
                        <!-- end of first name -->
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="cost" class="form-label">Project Cost:</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-dollar-sign text-muted"></i>
                            </span>
                            <input name="cost" type="text" id="cost" class="form-control" value="<?= $cost ?>" />
                            <!-- tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom" title="Enter your real last name">
                                    <i class="far fa-question-circle text-muted"></i>
                                </span>
                            </span>
                        </div>
                        <div class="h6 text-danger mb-3"><?php echo $errors['cost']; ?></div>
                        <!-- end of Last name -->
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="url" class="form-label">Project Video: <small class="text-muted">Not required</small> </label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-play text-muted"></i>
                            </span>
                            <input name="url" type="text" id="url" class="form-control" value="<?= $cost ?>" />
                            <!-- tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom" title="Insert Youtube Video if available">
                                    <i class="far fa-question-circle text-muted"></i>
                                </span>
                            </span>
                        </div>
                        <!-- end of Last name -->
                    </div>
                    <div class="col-12 col-md-2">
                        <label for="picture" class="form-label">Project Photo:</label>
                        <input name="picture" class="form-control form-control-sm" id="picture" type="file">
                        <div class="h6 text-danger mb-3"><?php echo $errors['picture']; ?></div>
                    </div>
                </div>
                <!-- End of first Row -->
                <!-- start the second row -->
                <div class="row ">
                    <div class="col-12 text-center">
                        <label for="story" class="form-label text-center">Project Story:</label>
                        <textarea name="story" id="editor">

                        </textarea>
                        <div class="h6 text-danger mb-3"><?php echo $errors['story']; ?></div>
                    </div>
                    <!-- End of second Row -->
                    <!-- third Row -->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="brief" class="form-label">Brief Project Description:</label>
                            <textarea class="form-control" id="brief" rows="4"></textarea>
                            <div class="h6 text-danger mb-3"><?php echo $errors['brief']; ?></div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="risk" class="form-label">Project Risk:</label>
                            <textarea class="form-control" id="risk" rows="4"></textarea>
                            <div class="h6 text-danger mb-3"><?php echo $errors['risk']; ?></div>
                        </div>
                    </div>
                    <!-- End of third Row -->
                    <!-- fourth Row -->
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="city" class="form-label">City:</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-map-marker-alt text-muted"></i>
                                </span>
                                <select name="city" class="form-select">
                                    <option value="NULL" selected disabled>City</option>
                                    <option value="Sana'a">Sana'a</option>
                                    <option value="Taizz">Taizz</option>
                                    <option value="Aden">Aden</option>
                                    <option value="Al Hudaydah">Al Hudaydah</option>
                                    <option value="Ibb">Ibb</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="h6 text-danger mb-3"><?php echo $errors['city']; ?></div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="tag" class="form-label">Tag:</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-tag text-muted"></i>
                                </span>
                                <select name="tag" class="form-select">
                                    <option value="NULL" selected disabled>Tag</option>
                                    <option value="Art">Art</option>
                                    <option value="Comics">Comics</option>
                                    <option value="Illustration">Illustration</option>
                                    <option value="Film">Film</option>
                                    <option value="Design">Design</option>
                                    <option value="Food">Food</option>
                                    <option value="Music">Music</option>
                                    <option value="Games">Games</option>
                                </select>
                            </div>
                            <div class="h6 text-danger mb-3"><?php echo $errors['tag']; ?></div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="phone" class="form-label">Phone Number:</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-phone-alt text-muted"></i>
                                </span>
                                <input name="phone" type="number" id="phone" class="form-control" value="" />
                                <!-- tooltip -->
                                <span class="input-group-text">
                                    <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really...">
                                        <i class="far fa-question-circle text-muted"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="h6 text-danger mb-3"><?php echo $errors['phone']; ?></div>
                            <!-- end of password -->
                        </div>
                    </div>
                    <!-- End of fourth Row -->
                    <!-- Buttons -->
                    <div class="row mt-4 mb-2 justify-content-center gap-2 gap-md-0">
                        <div class="col-4">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary text-dark w-100">Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include $temp . 'footer.php'; ?>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
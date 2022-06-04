<?php
$pageTitle = "Discover";
include '../conf/ini.php';
include $temp . 'header.php';
include '../conf/conn.php';

$Fquery = "SELECT ProjectID, FirstName, LastName, Title, BriefDesc, Picture, BriefDesc, projects.City, Tag, Created FROM projects 
                  LEFT JOIN users ON projects.User_ID = users.UserID ";

if (isset($_GET['tag']) && !isset($POST['filter'])) {
    $tag = $_GET['tag'];
    $query = $Fquery . "WHERE Tag LIKE '%$tag%'";
} else {
    if (isset($_POST['filter'])) {
        if (isset($_POST['city']) && isset($_POST['Time'])) {
            $city = addslashes($_POST['city']);
            $time = $_POST['Time'];
            $query = $Fquery . " WHERE projects.City = '$city' ORDER BY `Created` $time";
        } elseif (isset($_POST['city']) || isset($_POST['Time'])) {
            if (isset($_POST['city'])) {
                $city = addslashes($_POST['city']);
                $query = $Fquery . " WHERE projects.City = '$city'";
            } elseif (isset($_POST['Time'])) {
                $time = $_POST['Time'];
                $query = $Fquery . "ORDER BY `Created` $time";
            }
        } else {
            $query = $Fquery;
        }
    } else {
        $query = $Fquery;
    }
}


?>
<div class="container">
    <div class="mt-5">
        <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
            <div class="row justify-content-center">
                <div class="col-4 col-md-2">
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
                <div class="col-4 col-md-2">
                    <select name="Time" class="form-select">
                        <option value="NULL" selected disabled>Time</option>
                        <option value="DESC">Newest</option>
                        <option value="ASC">Oldest</option>
                    </select>
                </div>
                <div class="col-3 col-md-2">
                    <button type="submit" name="filter" value="submit" class="btn btn-primary text-dark w-100">Filter</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
$result = mysqli_query($con, $query) or die(mysqli_error($con));
if (mysqli_num_rows($result) > 0) {
    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($con);
} else {
    echo '<div class="alert alert-danger text-center mt-3" role="alert">
                    Sorry, there is no data to display </div>';
    echo "<div class='d-flex justify-content-center'>
            <img src=' $img/notfound.svg'>
        </div>";
    exit();
}
?>
<!-- starting Card -->
<div class="container mt-5 ">
    <div class="row ">
        <?php foreach ($projects as $project) : ?>
            <div class="py-3  col-md-3 d-flex justify-content-center">
                <div class="card shadow" style="width: 20rem;">
                    <a href="projectDesc.php?id=<?= $project['ProjectID'] ?>"><img src="../data/uploads/images/<?= $project['Picture']; ?>" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <a class="text-decoration-none" href="projectDesc.php?id=<?= $project['ProjectID'] ?>">
                            <h5 class="card-title text-primary"><?php echo htmlspecialchars($project['Title']); ?></h5>
                        </a>
                        <div class="card-text ellipsis">
                            <?php echo htmlspecialchars_decode($project['BriefDesc']); ?>
                        </div>
                        <span class=""><a href="projectDesc.php?id=<?= $project['ProjectID'] ?>">...read more</a></span>
                        <div class="card-text mt-2">
                            <div class="text-muted mb-2">
                                <i class="fas fa-tags fa-flip-horizontal"></i>
                                <?php echo htmlspecialchars($project['Tag']); ?>
                            </div>
                            <div class="text-muted mb-2">
                                <i class="fas fa-location-arrow"></i>
                                <?php echo htmlspecialchars($project['City']); ?>,Yemen
                            </div>
                            <div class="text-muted mb-2">
                                <i class="fas fa-clock"></i>
                                Started at: <?php echo htmlspecialchars($project['Created']); ?>
                            </div>
                        </div> <br />
                        <span class="">By<a href="#" class="mx-1 text-primary"><?php echo htmlspecialchars($project['FirstName'] . ' ' . $project['LastName']); ?></a></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
</div>
<!-- end the card -->
<?php include $temp . 'footer.php'; ?>
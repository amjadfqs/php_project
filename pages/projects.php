<?php
$pageTitle = "Discover";
include '../conf/ini.php';
include '../conf/conn.php';
include $temp . 'header.php';

$query = "SELECT ProjectID, Title, BriefDesc, Picture, BriefDesc, City, Tag, Created FROM projects";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($con);


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
                        <option value="Sana'a">Newest</option>
                        <option value="Taizz">Oldest</option>
                    </select>
                </div>
                <div class="col-3 col-md-2">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary text-dark w-100">Filter</button>
                </div>
            </div>
        </form>
    </div>


</div>
<!-- starting Card -->
<div class="container mt-5 ">
    <div class="row ">
        <?php foreach ($projects as $project) : ?>
            <div class="py-3 col-12 col-md-3 d-flex justify-content-center">
                <div class="card shadow" style="width: 20rem;">
                    <a href="#"><img src="../data/uploads/images/<?= $project['Picture']; ?>" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <a href="projectDesc.php?id={<?= $project['ProjectID'] ?>}">
                            <h5 class="card-title text-primary"><?php echo htmlspecialchars($project['Title']); ?></h5>
                            <div class="card-text ellipsis"><?php echo htmlspecialchars_decode($project['BriefDesc']); ?>
                            </div>
                            <span class=""><a href="">read more</a></span>
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
                            <span class="">By<a href="#" class="mx-1 text-primary">Adham Mustafa</a></span>
                    </div>
                </div>
            </div>
    </div>
<?php endforeach; ?>
</div>
</div>
<!-- end the card -->
<?php include $temp . 'footer.php'; ?>
<?php
include '../conf/conn.php';
include '../conf/ini.php';
include $temp . 'header.php';

?>
<div class="container-fluid">
    <div class="container">
        <h1 class="mt-3 text-primary">Project Information</h1>
    </div>
    <?php
    $query = 'SELECT * FROM `projects`';
    $result = mysqli_query($con, $query) or die('There is error in the query');
    $count = mysqli_num_rows($result);
    if ($count > 0) {
    ?>
        <div class="table-responsive">
            <table class="table mt-5 table-white table-hover border">
                <thead class="bg-primary text-center">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Cost</th>
                        <th scope="col">VidURL</th>
                        <th scope="col">Picture</th>
                        <th scope="col">BriefDesc</th>
                        <th scope="col">Story</th>
                        <th scope="col">Risk</th>
                        <th scope="col">City</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "  <tbody class='text-center'>
                            <tr>
                                <td>$row[Title]</td>
                                <td>$row[Cost]</td>
                                <td>$row[VidURL]</td>
                                <td>$row[Picture]</td>
                                <td>$row[BriefDesc]</td>
                                <td>$row[Story]</td>
                                <td>$row[Risk]</td>
                                <td>$row[City]</td>
                                <td>$row[Tag]</td>
                                <td>$row[Contact]</td>
                                <td>$row[Created]</td>
                                <td>
                                        <a class='text-danger' href='delete.php?id={$row['ProjectID']}'
                                        title='Delete'><i class='fas fa-trash-alt'></i></a>
                                </td>
                            </tr>
                        </tbody>";
            }
            echo "</table>";
        } else {
            echo '<p class="text-danger alert-danger">There is no information to display</p>';
        }
        mysqli_free_result($result);
        mysqli_close($con); ?>
        </div>
</div>
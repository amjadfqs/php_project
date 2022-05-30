<?php
$pageTitle = "Members Page";
include '../conf/conn.php';
include '../conf/ini.php';
include $temp . 'header.php';
?>
<div class="container">

    <h1 class="mt-5 text-center text-primary">Users Information</h1>
    <?php
    $query = 'SELECT `UserID`, `FirstName`, `LastName`, `Gender`, `Email`, `UserName`, `CreatedAt`, `City` FROM `users`';
    $result = mysqli_query($con, $query) or die('There is no error in the query');
    $count = mysqli_num_rows($result);
    if ($count > 0) {
    ?>
    <div class="table-responsive">
        <table class="table mt-5 table-white table-hover border">
            <thead class="table-primary text-center">
                <tr>
                    <th scope="col">UserID</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">UserName</th>
                    <th scope="col">City</th>
                    <th scope="col">CreatedAt</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
                while ($row = mysqli_fetch_array($result)) :
                    echo "  <tbody class='text-center'>
                            <tr>
                                <td>$row[UserID]</td>
                                <td>$row[FirstName]</td>
                                <td>$row[LastName]</td>
                                <td>$row[Gender]</td>
                                <td>$row[Email]</td>
                                <td>$row[UserName]</td>
                                <td>$row[City]</td>
                                <td>$row[CreatedAt]</td>
                                <td>
                                <a class='text-danger' href='delete.php?id={$row['UserID']}'
                                title='Delete'>X</a>
                                </td>
                            </tr>
                        </tbody>";
                endwhile; ?>
        </table>
    </div>
    <?php
    } else {
        echo '<p class="text-danger alert-danger">There is no information to display</p>';
    }
    mysqli_free_result($result);
    mysqli_close($con);
    ?>
</div>
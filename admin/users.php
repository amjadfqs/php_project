<?php
$pageTitle = "Users Page";
include '../conf/conn.php';
include '../conf/ini.php';
?>
<div class="container">
    <h1 class="mt-3 text-primary">Users Information</h1>
    <?php
    $query = 'SELECT `UserID`, `FirstName`, `LastName`, `Gender`, `Email`, `UserName`, `CreatedAt`, `City` FROM `users`';
    $result = mysqli_query($con, $query) or die('There is no error in the query');
    $count = mysqli_num_rows($result);
    if ($count > 0) {
    ?>
        <div class="table-responsive">
            <table class="table mt-5 table-white table-hover border">
                <thead class="bg-primary text-center">
                    <tr>
                        <th scope="col">UserID</th>
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">UserName</th>
                        <th scope="col">City</th>
                        <th scope="col">CreatedAt</th>
                        <th scope="col">Publisher</th>
                        <th scope="col">Admin</th>
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
                                <td class=''>
                                    <div class='form-check form-switch d-flex justify-content-center'>
                                        <input class='form-check-input' type='checkbox' role='switch' id='flexSwitchCheckDefault'>
                                    </div>
                                </td>
                                <td class=''>
                                    <div class='form-check form-switch d-flex justify-content-center'>
                                        <input class='form-check-input' type='checkbox' role='switch' id='flexSwitchCheckDefault'>
                                    </div>
                                </td>
                                <td>
                                        <a class='text-danger' href='javascript: delete_user({$row['UserID']})'
                                            title='Delete'><i class='fas fa-trash-alt'></i></a>
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
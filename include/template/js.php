<script src="<?php echo $js; ?>jquery-3.6.0.min.js"></script>
<script src="<?php echo $js; ?>bootstrap.bundle.js"></script>
<script src="<?php echo $js; ?>main.js"></script>
<script src="<?php echo $js; ?>fontawesome/solid.min.js"></script>
<script src="<?php echo $js; ?>fontawesome/regular.min.js"></script>
<script src="<?php echo $js; ?>fontawesome/fontawesome.min.js"></script>
<script>
    function delete_user(userID) {
        if (confirm("Are you sure you want to delete this user?")) {
            window.location.href = "delete.php?userID=" + userID;
        }
    }

    function delete_project(projectID) {
        if (confirm("Are you sure you want to delete this post?")) {
            window.location.href = "deleteProject.php?projectID=" + projectID;
        }
    }
</script>
</body>

</html>
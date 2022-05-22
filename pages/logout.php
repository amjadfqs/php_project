<?php
unset($_COOKIE);
setcookie('user', NULL, time() - 86400, '/');
header('location: login.php');

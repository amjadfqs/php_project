<?php
unset($_COOKIE);
setcookie('user', NULL, time() - 86400, '/');
session_start();
session_unset();
session_destroy();
header('location: login.php');

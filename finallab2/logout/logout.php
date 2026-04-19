<?php
include '../auth.php';

unset($_SESSION['logged_in']);
header("Location: ../C/login.php");
exit();
?>
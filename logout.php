<?php

session_start();
unset($_SESSION['login_system']);
header("Location:http://localhost/projects_point_projects/login_system/index.php");
?>

<?php
include_once ('../../config/init.php');

session_destroy();
header("Location: ../home/home.php");
?>
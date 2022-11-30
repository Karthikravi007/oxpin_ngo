<?php
session_start();
unset($_SESSION['madmin']);
session_unset();
session_destroy();
header("Location: index.php");
?>
<?php

/*session_start();
unset($_SESSION['is_logged']);
session_destroy();
header('location: ?page=login');*/
error_reporting(0);
unset($_SESSION['is_logged']);
header('location: ?page=login');
?>

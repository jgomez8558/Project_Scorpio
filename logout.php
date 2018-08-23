<?php
session_start(); // Resume the session you have
session_destroy(); // Destroy that session
header('Location: index.php'); // send you back to the login page
exit;
?>
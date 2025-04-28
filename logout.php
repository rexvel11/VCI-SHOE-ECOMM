<?php
session_start();

// Destroy the session
session_destroy();

// Redirect to login page (or admin page if you want to force login again)
header("Location: index.php");
exit();
?>

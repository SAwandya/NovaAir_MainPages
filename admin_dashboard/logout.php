<?php

session_start();

$sessionId = "staffType";
session_id($sessionId);

// Destroy the session
session_destroy();

header("Location: ../adminlogin.php");
exit();
?>
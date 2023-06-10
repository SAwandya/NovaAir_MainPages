<?php

session_start();

$sessionId = "ID";
session_id($sessionId);

// Destroy the session
session_destroy();

header("Location: ./index.php");
exit();
?>
<?php

// Destroying the session 


session_start();
session_destroy();

header('location:index.php');

?>
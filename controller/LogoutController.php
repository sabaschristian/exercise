<?php
    session_start();
    unset($_SESSION["authentication"]);
    unset($_SESSION["auth_user"]);
    header("Location: login.php");
    exit(0);
?>
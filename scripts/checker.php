<?php
require("assistant.php");
session_start();
    if (!in_array($_SERVER["PHP_SELF"], ["/login.php", "/logout.php", "/register.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            header("Location: scripts/login.php");
        }
    }

?>


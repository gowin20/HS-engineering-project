<?php
require("assistant.php");
require("database.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    render("registerpage.php", ["title" => "Register for an Account"]);
}

else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user"]))
        {
            apologize("You must provide your username.");
        }
    else if (empty($_POST["pword"]))
        {
            apologize("You must provide your password.");
        }
    else if (empty($_POST["confirm"]))
        {
            apologize("Please confirm your password");
        }
    else if ($_POST["pword"] != $_POST["confirm"])
        {
            apologize("Your Confirmation didn't match your Password");
        }
    else
    {
        $rows = mysql_query("INSERT INTO users (username, password) VALUES ('{$_POST["user"]}', '{$_POST["pword"]}')");    
        Header("Location: /");
    }
}
?>

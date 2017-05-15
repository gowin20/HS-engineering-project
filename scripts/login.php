<?php
require("assistant.php");
require("database.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    render("loginpage.php", ["title" => "Log In"]);
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
    else
    {
        $rows = mysql_query("SELECT * FROM users WHERE username = '{$_POST["user"]}' AND password = '{$_POST["pword"]}' ");
        if (mysql_num_rows($rows) > 0) {
                $_SESSION["id"] = $_POST["user"];
                Header("Location: /");
                }
    }
        apologize("Incorrect Username or Password");
    }
?>
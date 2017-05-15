<?php

require("checker.php");
render("accountpage.php", ["title" => "{$_SESSION["id"]}'s account"]);

?>

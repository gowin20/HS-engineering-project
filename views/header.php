<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <?php if (isset($title)): ?>
            <title>Gowin's Site: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Gowin's Site</title>
        <?php endif ?>
    </head>
    <body>

        <div class="w3-container">

            <div class="w3-container w3-green">
                <?php if (!empty($_SESSION["id"])): ?>
                    <?php if (basename($_SERVER['PHP_SELF']) == "index.php"): ?>
                    <ul class="w3-navbar">
                        <li><a href="scripts/home.php">Home</a></li>
                        <li><a href="scripts/games.php">Games</a></li>
                        <li><a href="">Filler</a></li>
                        <li><a href="scripts/account.php"><?= htmlspecialchars($_SESSION["id"]) ?></a></li>
                        <li><a href="scripts/logout.php"><strong>Log Out</strong></a></li>
                        
                        
                    </ul>
                    <?php else: ?>
                    <ul class="w3-navbar">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="games.php">Games</a></li>
                        <li><a href="">Filler</a></li>
                        <li><a href="account.php"><?= htmlspecialchars($_SESSION["id"]) ?></a></li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                        
                    </ul>
                    <?php endif ?>
                <?php endif ?>
            </div>
            <br>
            <div>
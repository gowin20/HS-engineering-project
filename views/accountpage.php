<div class="w3-container">
    <h1><?= $_SESSION["id"]?>'s Account</h1>
    <br>
    This page is lacking lots of functionality. If I wanted to keep working on this website (which I do), the first thing I would do would be to write the scripts to go with this page, because right now nothing happens if you click anything.
    <br><br>
    <div class="w3-container w3-light-grey">
        <strong>Username:</strong> <?= $_SESSION["id"]?> <br><br>
    
        <strong>Password:</strong> ***** <br> <!-- TODO: Add abity to change password (obvs), also add for loop that reads how long password is and prints that many asterisks, instead of it just being 5 every time-->
        <em><a href="">Change Password</a></em><br>
    </div>
</div>
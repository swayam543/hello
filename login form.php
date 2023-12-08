<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <h2>login page</h2>
    <form action="logindata.php" method="Post">
        <label>Enter Username:</label>
        <input type="Username" name="A1"required><br><hr>
        <label>Enter Password:</label>
        <input type="Password" name="A2" required><br><hr>
        <input type="submit" name="op" value="Login">
</form>
<form action="registeration.php" method="post">
    <p style="color:green"><label>Does not a account:</lable>
    <input type="submit" name="em" value="REGISTER"></p>
</form>
<?php


?>  
</body>
</html>
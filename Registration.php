<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
    <h1>registeration</h1>
    <form action="database.php" method="POST">
        <label>Enter username here :</label>
        <input type="username"name="c1" required><br><hr>
        <label> Enter Email here :</label>
        <input type="Email" name="c2" required><br><hr>
        <label> Enter Password</label>
        <input type="Password" name="c3" required><br><hr>
        <label> Enter Contact</label>
        <input type="Contact" name="c4" required><br><hr>
        <input type="submit" name="bv" value="REGISTER"><br><hr>
</form>
<form action="login.php" method="GET">
    <p style="color:black"><label>GO BACK TO LOGIN PAGE</label>
    <input type="submit" name="up" value="BACK"></p>
</form>
</body>
</html>
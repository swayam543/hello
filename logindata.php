<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$Email = $_POST['A1'];
$Password = $_POST['A2'];

$ak="SELECT * FROM social media where email ='$Email'";
$ras = mysqli_query($conn, $ak);

$row = mysqli_fetch_array($ras);
//echo (show['password']);

if($row['password'] == $password){
    header("location:text.php");
}
else{
    echo"<p style='color:red;'>failed to login:Invalid Credential</p>";
}

?>
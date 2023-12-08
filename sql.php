<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login";

$conn = mysqli_connect($servername,$username,$password,$dbname);


$username = $_POST['p2'];
$Email = $_POST['p1'];
$contact = $_POST['p3'];
$Password = $_POST['p4'];

$sql = "INSERT INTO 'social media'('username','Email','contact','Password') value ('$username','$Password','$contact','$Email')";
$rs = mysqli_query($conn,$sqli);

if($rs>0)
{
    echo"<p style='color:blue;'>REGISTERED SUCCESSFULLY</p>";

}
    
?>


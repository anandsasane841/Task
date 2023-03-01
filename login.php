<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "vaish45";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);




if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
    
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    
}
$sql="select * from data1 where email='$email' AND password='$password'";
$sql22="select id from data1 where email='$email' AND password='$password'";
$result23=mysqli_query($conn,$sql22);
$row122=mysqli_fetch_assoc($result23);

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
 
   
header("location : profile.html");
echo "login done";



}
if($num!=1){
   echo "login failed";
   
}
$conn->close();

?>



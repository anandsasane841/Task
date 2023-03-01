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
  $name = $_POST["name"];
  $last = $_POST["last"];
  $date = $_POST["date"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];
  echo "Name: " . $name . "<br>";
  echo "last: " . $last. "<br>";
  echo "date: " . $date . "<br>";
  echo "email: " . $email . "<br>";
  echo "phone: " . $phone . "<br>";

  echo "Password: " . $password . "<br>";
  

  // do something with the form data
}
$sql = "insert into data1 (name,last,date,email,phone,password) values ('$name','$last','$date','$email','$phone','$password')" ;
//$sql1 = "INSERT INTO led_status (p) VALUES ('$data1')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
    echo "<script>window.location.href = 'login.html';</script>";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>
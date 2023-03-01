<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "vaish45";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);




if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
    
}

 

  // do something with the form data
$name="select name from data1 where id =1";
$last="select last from data1 where id =1";
$date ="select date from data1 where id =1";
$phone ="select phone from data1 where id =1";

//$contact="select phone from data1 where id =0;"
//$last="select last from data1 where id =0;"


$result=mysqli_query($conn,$name);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

$result11=mysqli_query($conn,$last);
$row11=mysqli_fetch_assoc($result11);


$result1=mysqli_query($conn,$date);
$row1=mysqli_fetch_assoc($result1);
 
$result2=mysqli_query($conn,$phone);
$row2=mysqli_fetch_assoc($result2);



echo $row['name'];
echo $row1['date'];
echo $row2['phone'];



$conn->close();
?>

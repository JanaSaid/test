<?php

require_once 'connection.php';
$name = $_GET['username'];
$password = $_GET['password'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$query = "insert into calc(username,password,phone,address) values('$name','$password','$phone','$address')";
if(mysqli_query($con, $query)){

echo mysqli_insert_id($con);

}
else {echo "-1";}
?>


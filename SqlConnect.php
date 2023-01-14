<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dataName = "product_management";

$conn =mysqli_connect($hostname,$username,$password,$dataName);

if(!$conn){
    die("Connection failed" .mysqli_connect_error());
}//else{
   // echo "Connected successfully";
//}
?>
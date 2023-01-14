<?php
include "SqlConnect.php";
$id= $_GET['id'];
$sql= "DELETE FROM `product_info` WHERE id=$id";
$result=mysqli_query($conn,$sql);

if($result){
    header("Location:http://localhost/CRUDPROJECT/index.php?msg=Record deleted successfully");
}else{
    echo "Failed: ". mysqli_error($conn);
}
?>
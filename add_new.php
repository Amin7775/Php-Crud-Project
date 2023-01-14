<?php
include "SqlConnect.php";

if(isset($_POST['sumbit'])){
    $Product_Name = $_POST['Product_Name'];
    $Manufacturer= $_POST['Manufacturer'];
    $Buying_Price= $_POST['Buying_Price'];
    $Selling_Price = $_POST['Selling_Price'];
    $Stock = $_POST['Stock'];
    
    $sql= "INSERT INTO `product_info`(`id`, `Product_Name`, `Manufacturer`, `Buying_Price`, `Selling_Price`, `Stock`) VALUES (NULL,'$Product_Name','$Manufacturer','$Buying_Price','$Selling_Price','$Stock')";

    $result= mysqli_query($conn,$sql);

    if($result){
        header("Location:http://localhost/CRUDPROJECT/index.php?msg=New product added successfully");
    }else{
        echo "Failed: ", mysqli_error($conn);
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
    Product Management
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Products</h3>
            <p class="text-muted">Complete the form below to add a new Product</p>
        </div>

        <div class="container  d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label">Product Name:</label>
                    <input type="text" class="form-control" name="Product_Name"> 
                </div>

                <div class="col">
                    <label class="form-label">Manufacturer:</label>
                    <input type="text" class="form-control" name="Manufacturer"> 
                </div>
            </div>
            <div>
                <div class="col">
                    <label class="form-label">Buying Price:</label>
                    <input type="number" class="form-control" name="Buying_Price"> 
                </div>

                <div class="col">
                    <label class="form-label">Selling Price:</label>
                    <input type="number" class="form-control" name="Selling_Price"> 
                </div>
            </div>
            <div>
                <div class="col">
                    <label class="form-label">Stock:</label>
                    <input type="number" class="form-control" name="Stock"> 
                </div>
            </div>

            <div class=mt-3>
                <button type="submit" class="btn btn-success" name="sumbit">Save</button>
                <a href="index.php" class="btn btn-danger" name="cancel">Cancel</a>
            </div>

            </form>
        </div> 
    </div>



  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
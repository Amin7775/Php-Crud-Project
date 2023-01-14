<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
    Product Management
    </nav>

    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg= $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <a href="add_new.php" class="btn btn-dark">Add New</a>

        <table class="table table-hover text-center mt-3">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Manufacturer</th>
      <th scope="col">Buying Price</th>
      <th scope="col">Selling Price</th>
      <th scope="col">Stock</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include "SqlConnect.php";
        $sql="SELECT * FROM `product_info`";
        $result=mysqli_query($conn,$sql);
        $i=0;
        while($row=mysqli_fetch_assoc($result)){
            $i++;
            ?>
            <tr>

            <td><?php echo $i?></td>

            <td><?php echo $row['Product_Name']?></td>
            
            <td><?php echo $row['Manufacturer']?></td>

            <td><?php echo $row['Buying_Price']?></td>

            <td><?php echo $row['Selling_Price']?></td>

            <td><?php echo $row['Stock']?></td>

            <td>
                <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark">
                    <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                </a>
                <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark">
                    <i class="fa-solid fa-trash fs-5"></i>
                </a>

            </td>
            </tr>
            <?php
        }
    ?>
    
  </tbody>
</table>
    </div>
    



  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include 'includes/header.php' ?>
    <body>
        <?php
            require_once 'controllers/product.php';
            $product = new Product;
            
            $id = $_GET['id'];
            
            // Show product
            $data = $product->show($id);

        ?>
        
        <div class="container p-4">
            <!-- formulario -->
            <form method="POST" action="request/editRequest.php?id=<?php echo $data['id']; ?>">
                <div class="form-group">
                  <label for="name">Name</label>
                  <textarea class="form-control" id="name" rows="1" name="name"><?php echo $data['name']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <textarea class="form-control" id="quantity" rows="1" name="quantity"><?php echo $data['quantity']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <textarea class="form-control" id="price" rows="1" name="price"><?php echo $data['price']; ?></textarea>
                </div>

                  <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
               
        <?php include 'includes/footer.php' ?>
    </body>
</html>

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
            $product = new Product();
            
            // Tasks list
            $products = $product->list();
        ?>
        
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4" >
                    <h2>New prodcut</h2>
                    <!-- formulario -->
                    <form method="POST" action="request/createRequest.php">
                        <div class="form-group">
                          <label for="description">Product name</label>
                          <textarea class="form-control" id="name" rows="1" name="name"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Product quantity</label>
                            <textarea class="form-control" id="quantity" rows="1" name="quantity"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Product price</label>
                            <textarea class="form-control" id="price" rows="1" name="price"></textarea>
                        </div>
                        <div class="form-group">
                        </div>
                        
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
               
        <?php include 'includes/footer.php' ?>
    </body>
</html>

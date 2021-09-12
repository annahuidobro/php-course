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
        <!--
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4" >
                    <h2>New prodcut</h2>

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
                -->
                <div class="col-md-8">
                    <h2>Purchase</h2>
                    <a class="btn btn-secondary" href="create.php">Add product <i class="fas fa-pen-alt"></i></a>
                    <table class="table">
                       <thead>
                         <tr>
                           <th scope="col">#</th>
                           <th scope="col">Name</th>
                           <th scope="col">Quantity</th>
                           <th scope="col">Price</th>
                             <th scope="col">Total</th>
                           <th scope="col">Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                          <?php
                          foreach($products as $product):
                              ?>
                         <tr>
                           <th scope="row"><?php echo $product['id'] ?></th>
                           <td><?php echo $product['name'] ?></td>
                           <td><?php echo $product['quantity'] ?></td>
                           <td><?php echo $product['price'] ?></td>
                             <td><?php echo $product['quantity']*$product['price']  ?></td>
                           <td>
                               <a class="btn btn-secondary" href="edit.php?id=<?php echo $product['id'] ?>"><i class="fas fa-pen-alt"></i></a>
                               <a class="btn btn-danger" href="request/deleteRequest.php?id=<?php echo $product['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                           </td>
                         </tr>
                         <?php endforeach; ?>
                       </tbody>
                     </table>
                </div>
            </div>
        </div>
               
        <?php include 'includes/footer.php' ?>
    </body>
</html>

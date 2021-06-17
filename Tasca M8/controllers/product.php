<?php

require_once 'db.php';

class Product {
    function list() {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "SELECT * FROM product";
        $result = $mysql->query($sql);
        $product = $result->fetch_all(MYSQLI_ASSOC);
        
        // Cerrar conexión
        $connection->close($mysql);
        
        return $product;
    }
    
    function create($name, $quantity, $price) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();

        $sql = 'INSERT INTO product (name, quantity, price) VALUES ("' . $name . '", ' . $quantity . ', ' . $price . ');';

        $result = $mysql->query($sql);
        
        $connection->close($mysql);
        
        return $result;
    }
    
    function show($id) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "SELECT * FROM product WHERE id = $id";
        $result = $mysql->query($sql);
     
        $product = $result->fetch_assoc();
        
        $connection->close($mysql);
        
        return $product;
    }
    
    function update($id, $name, $quantity, $price) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();

        $sql = "UPDATE product SET name = '$name', quantity = $quantity, price = $price WHERE id = $id;";
        $result = $mysql->query($sql);

        $connection->close($mysql);
        
        return $result;          
    }
    
    function delete($id) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "DELETE FROM product WHERE id = $id";
        $result = $mysql->query($sql);
             
        $connection->close($mysql);
        
        return $result;     
    }
}
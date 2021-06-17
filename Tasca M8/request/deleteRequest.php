<?php

require_once '../controllers/product.php';


if (!isset($_GET['id']) || $_GET['id'] == '') {
     header("Location: ../index.php");
}

$id = $_GET['id'];

$product = new Product();
$result = $product->delete($id);

if ($result->connect_error) {
    die('Error de conexión ' . $connection->connect_error);
} else {
    header("Location: ../index.php");
}
<?php

require_once '../controllers/product.php';

if (!isset($_POST['name']) || $_POST['name'] == ''
    || !isset($_POST['quantity']) || $_POST['quantity'] == ''
    || !isset($_POST['price']) || $_POST['price'] == '') {
    exit('ERROR BD: Transaction error');
}

$product = new Product();
$result = $product->create($_POST['name'], $_POST['quantity'], $_POST['price']);

if ($result->connect_error) {
    die('Connection error ' . $connection->connect_error);
} else {
    header("Location: ../index.php");
}
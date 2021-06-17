<?php

require_once '../controllers/product.php';


if (!isset($_GET['id']) || $_GET['id'] == '') {
    header("Location: ../index.php");
}

$id = $_GET['id'];

if (!isset($_POST['name']) || $_POST['name'] == ''
    || !isset($_POST['quantity']) || $_POST['quantity'] == ''
    || !isset($_POST['price']) || $_POST['price'] == '') {
    exit('ERROR BD: Transaction error');
}

$product = new Product();
$result = $product->update($id, $_POST['name'], $_POST['quantity'], $_POST['price']);

if ($result->connect_error) {
    die('Error de conexión ' . $connection->connect_error);
} else {
    header("Location: ../index.php");
}
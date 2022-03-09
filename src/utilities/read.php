<?php
header ("Access-Control-Allow-Origin:*");
header ("Control-Type:application/json;charset=UTF")

//database and object files
include_once '..config/database.php';
include_once '../object/product.php';

//instance database and product object
$database = new Database();
$db=$database->getConnection();

//initialize object
$product=new Product();

//query product
$stmt = $product->read();
$num=$stmt->rowCount();


?>
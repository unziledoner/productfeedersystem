<?php

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod !== 'GET') {
    http_response_code(404);
} else {
    include_once "autoloader/RepositoryAutoloader.php";
    include_once "autoloader/ComponentAutoloader.php";
    include_once __DIR__ . "/../src/database/MySQLConnection.php";

    $productMapping = array(
        "google" => array("id" => "productID", "name" => "productName", "price" => "productPrice", "category" => "productCategory"),
        "cimri"  => array("id" => "product_id", "name" => "product_name", "price" => "product_price", "category" => "product_category"),
        "facebook"  => array("id" => "f_product_id", "name" => "f_product_name", "price" => "f_product_price", "category" => "f_product_category")
    );

    include_once __DIR__ . "/../app/routes.php";
}

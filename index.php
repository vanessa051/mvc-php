<?php

use app\Model\Product;

require_once 'vendor/autoload.php';

$product = new \app\Model\Product();
$productDao = new \app\Model\ProductDao();
$productDao->delete(1);
$productDao->read();
/*$product->setId(1);
$product->setName('Suculenta');
$product->setDescription('Echeveria');*/



/*$productDao = new \app\Model\ProductDao();
$productDao->update($product);
$productDao->read();*/

/*
$productDao = new \app\Model\ProductDao();
$productDao->create($product);
$productDao->read();
*/
foreach($productDao->read() as $product):
echo $product['name']."<br>".$product['description']."<hr>";
endforeach;

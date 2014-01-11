<?php
include_once('product.php');


class ProductsController {
    public function index() {
        // 何かの処理...

        $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;', 'root', '');
	    $stmt = $pdo->query('SELECT * FROM Products');

	    $model_data = array();
	    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	        // echo implode(', ', $row) . PHP_EOL . '<br />';
	        array_push($model_data, $row['name']);
	    }

        // $model_data = array('テレビ', '掃除機', '洗濯機');
        include('views/sales/index.php');
    }

    public function newSale($product_id) {
    	$product = Product::load($product_id);
    	include('views/sales/new.php');	
    }
}

$controller = new ProductsController();


if (isset($_GET['product']) && !empty($_GET['product'])) {
    $controller->newSale($_GET['product']);
}else{
	$controller->index();
}
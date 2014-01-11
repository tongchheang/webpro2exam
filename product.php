<?php

class Product {

    private $id;
    private $name;
    private $price;

    public function __construct($params) {        
        $this->id         = isset($params['id']) ? $params['id'] : null;
        $this->name = isset($params['name']) ? $params['name'] : null;
        $this->price   = isset($params['price']) ? $params['price'] : null;
    }


    public static function all() {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;', 'root', '');
        $stmt = $pdo->query('SELECT * FROM Products');

        $model_data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // echo implode(', ', $row) . PHP_EOL . '<br />';
            array_push($model_data, $row['name']);
        }

        return $model_data;
    }

    public static function load($id) {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;', 'root', '');
        $stmt = $pdo->query('SELECT * FROM Products WHERE id=' . $id);

        $model_data = array();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $model_data['id'] = $row['id'];
        $model_data['name'] = $row['name'];
        $model_data['price'] = $row['price'];

        $product = new Product($model_data);

        return $product;
    }


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

}
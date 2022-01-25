<?php

// DB configuration
define('DB_CONFIG', 'mysql:host=localhost;dbname=beprofit;charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');


// Inserts data to DB
function insertData($data) {
    $pdo = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    $stmt = $pdo->prepare("INSERT INTO orders (order_id, shop_id, closed_at, created_at, updated_at, total_price, subtotal_price, total_weight, total_tax, currency, financial_status, total_discounts, name, processed_at, fulfillment_status, country, province, total_production_cost, total_items, total_order_shipping_cost, total_order_handling_cost)" 
    ." VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    try {
        $pdo->beginTransaction();
        foreach ($data as $row)
        {
            $arr = [];
            foreach($row as $item){
                $arr[] = $item;
            }
            $arr = array_values($arr);
            $stmt->execute($arr);
        }
        $pdo->commit();
    }
    catch (Exception $e){
        throw $e;
    }
}


// Generic method for running SQL query
function runQuery($sql) {
    try {
        $pdo = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
        $stmp =  $pdo->query($sql);
        $result = $stmp->fetch();
        return $result;
    }
    catch (Exception $e){
        throw $e;
    }
}
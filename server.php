<?php

require_once("./db.php");
require_once("./API.php");


// Gets data from API & stores it in DB
function getAndStoreData() {
    $result = getDataFromApi();
    insertData($result->data);
}

// Gets Net Sales
function getNetSales() {
    $sql = "SELECT SUM(total_price) AS sum FROM orders WHERE financial_status = 'paid' OR financial_status = 'partially_paid'";
    $result = runQuery($sql);
    return $result['sum'];
}

// Gets Production Cost
function getProductionCost() {
    $sql = "SELECT SUM(total_production_cost) AS sum FROM orders WHERE (financial_status = 'paid' OR financial_status = 'partially_paid') AND fulfillment_status = 'fulfilled' ";
    $result = runQuery($sql);
    return $result['sum'];
}

// Gets Gross Benefit
function getGrossBenefit() {
    $sql = "SELECT (SELECT SUM(total_price) AS sum FROM orders WHERE financial_status = 'paid' OR financial_status = 'partially_paid')"
            ." - (SELECT SUM(total_production_cost) AS sum FROM orders WHERE (financial_status = 'paid' OR financial_status = 'partially_paid') AND fulfillment_status = 'fulfilled')"
            ." AS sum";
    $result = runQuery($sql);
    return $result['sum'];
}

// Gets Gross Margin
function getGrossMargin() {
    $sql = "SELECT ((SELECT SUM(total_price) AS sum FROM orders WHERE financial_status = 'paid' OR financial_status = 'partially_paid')"
            ." - (SELECT SUM(total_production_cost) AS sum FROM orders WHERE (financial_status = 'paid' OR financial_status = 'partially_paid') AND fulfillment_status = 'fulfilled'))"
            ." / (SELECT SUM(total_price) AS sum FROM orders WHERE financial_status = 'paid' OR financial_status = 'partially_paid')"
            ." * 100 AS sum";
    $result = runQuery($sql);
    return $result['sum'];
}
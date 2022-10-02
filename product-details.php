<?php
include_once  "./classes/DBAccess.php";
include_once "./settings/db.php";

ob_start();

$title = "Products";

$db = new DBAccess($dsn, $userName, $password);
$pdo = $db->connect();

if (isset($_GET["itemId"])) {
    $sql = "SELECT itemId, itemName, photo, price, salePrice, description FROM item WHERE itemId = :itemId";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue("itemId", $_GET["itemId"]);
    $itemRow = $db->getRow($stmt);

    $activeCategory = 0;   //$_GET["categoryId"];
    $sql = "SELECT categoryId, categoryName FROM category";
    $stmt = $pdo->prepare($sql);
    $categoryRows = $db->getRows($stmt);
    // $sql = "SELECT categoryName FROM category WHERE categoryId = :categoryId";
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindValue("categoryId", $_GET["categoryId"]);
    $productHeading = "Product Detail";   //$itemRow["itemName"];
}

include "./templates/product-details.html.php";

$output = ob_get_clean();

include "./templates/layout.html.php";

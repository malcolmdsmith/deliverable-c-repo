<?php
include_once  "./classes/DBAccess.php";
include_once "./settings/db.php";

ob_start();

$title = "Browse Products";

$db = new DBAccess($dsn, $userName, $password);
$pdo = $db->connect();

if (isset($_GET["categoryId"])) {
    $sql = "SELECT itemId, itemName, photo, price, salePrice FROM item WHERE categoryId = :categoryId";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue("categoryId", $_GET["categoryId"]);
    $itemRows = $db->getRows($stmt);

    include "utility/categories.php";

    $sql = "SELECT categoryName FROM category WHERE categoryId = :categoryId";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue("categoryId", $_GET["categoryId"]);
    $productHeading = $db->getValue($stmt);

    $activeCategory = $_GET["categoryId"];
}

include "./templates/view-products.html.php";

$output = ob_get_clean();

include "./templates/site-layout.html.php";

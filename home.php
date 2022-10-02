<?php
include_once  "./classes/DBAccess.php";
include_once "./settings/db.php";

ob_start();

$title = "Sports Warehouse Online";

$db = new DBAccess($dsn, $userName, $password);

$sql = "SELECT itemId, itemName, photo, price, salePrice FROM item WHERE featured = true";

$pdo = $db->connect();

$stmt = $pdo->prepare($sql);
$itemRows = $db->getRows($stmt);

$sql = "SELECT categoryId, categoryName FROM category";
$stmt = $pdo->prepare($sql);
$categoryRows = $db->getRows($stmt);
$activeCategory = 0;
$productHeading = "Featured Products";

include "./templates/view-products.html.php";

$output = ob_get_clean();

include "./templates/layout.html.php";

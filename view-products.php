<?php
include_once  "./classes/DBAccess.php";
include_once "./settings/db.php";

ob_start();

$title = "Sports Warehouse Online";

$db = new DBAccess($dsn, $userName, $password);

$sql = "SELECT categoryName, itemId, itemName, photo, price, salePrice FROM item INNER JOIN category USING(categoryId) ORDER BY categoryName";

$pdo = $db->connect();

$stmt = $pdo->prepare($sql);
$itemRows = $db->getRows($stmt);

$sql = "SELECT count(*) as rowCount FROM item";
$pdo = $db->connect();

$stmt = $pdo->prepare($sql);
$rowCount = $db->getValue($stmt);

include "utility/categories.php";

$productHeading = "All Products";

include "./templates/view-products.html.php";

$output = ob_get_clean();

include "./templates/site-layout.html.php";

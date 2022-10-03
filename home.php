<?php
include_once  "./classes/DBAccess.php";
include_once "./settings/db.php";

ob_start();

$title = "Sports Warehouse Online";
$showContactPage = false;

$db = new DBAccess($dsn, $userName, $password);

$sql = "SELECT itemId, itemName, photo, price, salePrice FROM item WHERE featured = true";

$pdo = $db->connect();

$stmt = $pdo->prepare($sql);
$itemRows = $db->getRows($stmt);

include "utility/categories.php";

$productHeading = "Featured Products";

include "./templates/view-products.html.php";

$output = ob_get_clean();

include "./templates/site-layout.html.php";

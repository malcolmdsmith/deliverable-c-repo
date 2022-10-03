<?php
include_once  "./classes/DBAccess.php";
include_once "./settings/db.php";

ob_start();

$title = "Products";
$showContactPage = false;

$db = new DBAccess($dsn, $userName, $password);
$pdo = $db->connect();

if (isset($_GET["itemId"])) {
    $sql = "SELECT itemId, itemName, photo, price, salePrice, description FROM item WHERE itemId = :itemId";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue("itemId", $_GET["itemId"]);
    $itemRow = $db->getRow($stmt);

    include "utility/categories.php";

    $productHeading = "Product Detail";   //$itemRow["itemName"];
}

include "./templates/product-details.html.php";

$output = ob_get_clean();

include "./templates/site-layout.html.php";

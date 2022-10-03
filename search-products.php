<?php
include_once  "./classes/DBAccess.php";
include_once "./settings/db.php";

ob_start();

$title = "Search Results";
$productHeading = "Search results";
$showContactPage = false;

$db = new DBAccess($dsn, $userName, $password);
$pdo = $db->connect();

include "utility/categories.php";

if (isset($_POST["submit"])  && isset($_POST["search-text"]) && strlen($_POST["search-text"]) > 0) {
    $search = $_POST["search-text"];
    $sql = "SELECT itemId, itemName, photo, price, salePrice FROM item WHERE itemName Like :keywords || description Like :keywords";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":keywords", "%$search%",);
    $itemRows = $db->getRows($stmt);

    include "./templates/view-products.html.php";
}

function setValue($fieldName)
{
    if (isset($_POST[$fieldName]))
        return htmlspecialchars($_POST[$fieldName]);
}

$output = ob_get_clean();

include "./templates/site-layout.html.php";

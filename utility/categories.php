<?php
// include_once  "./classes/DBAccess.php";
// include_once "./settings/db.php";


// $db = new DBAccess($dsn, $userName, $password);

$sql = "SELECT categoryId, categoryName FROM category";
$stmt = $pdo->prepare($sql);
$categoryRows = $db->getRows($stmt);
$activeCategory = 0;

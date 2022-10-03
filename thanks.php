<?php
include_once  "./classes/DBAccess.php";
include_once "./settings/db.php";

$db = new DBAccess($dsn, $userName, $password);
$pdo = $db->connect();


$title = "Thank you!!";
$showContactPage = false;

//start buffer
ob_start();

include "utility/categories.php";

//display thanks file
include "./templates/confirmation.html.php";

$output = ob_get_clean();

include "./templates/site-layout.html.php";

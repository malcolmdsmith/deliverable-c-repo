<?php

include_once  "./classes/DBAccess.php";
include_once "./settings/db.php";

$db = new DBAccess($dsn, $userName, $password);
$pdo = $db->connect();

$title = "Contact - Sports Warehouse Online Store";
$showContactPage = true;
$productHeading = "Contact Form";

$requiredFields = ["firstName" => "First Name", "lastName" => "Last Name", "email" => "Email"];
$missingFields = [];

ob_start();

include "utility/categories.php";


if (isset($_POST["submitButton"])) {
    foreach ($requiredFields as $field => $description) {
        if (!isset($_POST[$field]) || !$_POST[$field]) {
            $missingFields[$field] = $description;
        }
    }

    if ($missingFields) {
        // include "./templates/callToAction.html.php";
        include "./templates/contact-form.html.php";
        include "./templates/missing-fields.html.php";
    } else {
        header("Location: thanks.php");
        ob_get_clean();
        exit();
    }
} else {
    // include "./templates/call-to-action.html.php";
    include "./templates/contact-form.html.php";
}

function setValue($fieldName)
{
    if (isset($_POST[$fieldName]))
        return htmlspecialchars($_POST[$fieldName]);
}

$output = ob_get_clean();

include "./templates/site-layout.html.php";

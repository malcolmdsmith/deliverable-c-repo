<?php
if ($_SERVER["SERVER_NAME"] == "localhost" || $_SERVER["SERVER_ADDR"] == "127.0.0.1") {
    $dsn = "mysql:host=localhost;dbname=sportswh;charset=utf8";
    $userName = "root";
    $password = "";
} else {
    $dsn = "mysql:host=localhost;dbname=id19669779_sportswh;charset=utf8";
    $userName = "id19669779_malcolm_smith17";
    $password = "fN?&&sWij9nqPvHw";
}

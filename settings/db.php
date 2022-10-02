<?php
if ($_SERVER["SERVER_NAME"] == "localhost" || $_SERVER["SERVER_ADDR"] == "127.0.0.1") {
    $dsn = "mysql:host=localhost;dbname=sportswh;charset=utf8";
    $userName = "root";
    $password = "";
} else {
    $dsn = "mysql:host=sql213.epizy.com;dbname=epiz_32583334_northwind;charset=utf8";
    $userName = "epiz_32583334";
    $password = "IPKno3xJmx";
}

<?php

$db_host = "localhost";
$db_user = "root";
$db_passwor = "";
$db_host = "data_login";

try {
$db = new PDO("mysql:host =$db_host; db_name=$db_name", $dbuser, $db_pass);
} catch(PDOException $e) {
die ("Terjadi masalah: " . Se->getMessage());
}
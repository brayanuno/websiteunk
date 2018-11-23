<?php
$dbServername = 'gator3235.hostgator.com';
$dbUsername = "brayanun_brayan";
$dbPassword = "Rakion1!";
$dbName = "brayanun_suscribeForm";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection Failed");
}
?>
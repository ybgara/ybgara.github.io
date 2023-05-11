<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "game";

$connect = new mysqli($hostname, $username, $password, $database);

if ($connect->connect_error) {
    die(" Sorry, Your Connection is Error : " . $connect->connect_error);
}

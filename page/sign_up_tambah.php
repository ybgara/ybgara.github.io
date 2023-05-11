<?php
include "connection.php";

$ID     = $_POST['username'];
$PW     = $_POST['password'];
$NAME   = $_POST['name'];
$NAME2  = $_POST['name'];
$NUMBER = $_POST['numb'];
$SEX    = $_POST['sex'];

$sql1       = "INSERT INTO user VALUES('', '$NAME', '$NUMBER', '$SEX')";
$query1     = mysqli_query($connect, $sql1) or die(mysqli_error($connect));

$sql2       = "SELECT id FROM user WHERE name = '$NAME2' ";
$query2     = mysqli_query($connect, $sql2);
$data       = mysqli_fetch_array($query2);
$ID_USER    = $data['id'];

$sql3       = "INSERT INTO account VALUES('', '$ID', '$PW', '$ID_USER')";
$query3     = mysqli_query($connect, $sql3) or die(mysqli_error($connect));

if ($query3) {
    header("location: ../index.php?pesan=signup");
} else {
    echo "Input Data Gagal";
}

<?php

session_start();

if (empty($_SESSION['username'])) {
    header("location:login.php?pesan=belum_login");
}

$ACTIVE = $_SESSION['username'];

include 'connection.php';

$sql    = "SELECT id_user FROM account WHERE username = '$ACTIVE' ";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
while ($row = mysqli_fetch_array($query)) {
    $ID_USER = $row['id_user'];
}

$UID = $_POST['uid'];
$PAY = $_POST['pay'];
$UC = $_POST['item'];

$sql2 = "INSERT INTO transaction VALUES('', '$UID', '$PAY', '$UC', '$ID_USER')";
$query2 = mysqli_query($connect, $sql2) or die(mysqli_error($connect));

$sql3 = "INSERT INTO history VALUES('', '$UID', '$PAY', '$UC', '$ID_USER')";
$query3 = mysqli_query($connect, $sql3) or die(mysqli_error($connect));

if ($query2 && $query3) {
    header("location: home.php?pesan=topup");
} else {
    echo "Input Data Gagal";
}

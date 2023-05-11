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

$NAME   = $_POST['name'];
$NUMB   = $_POST['numb'];
$SEX    = $_POST['sex'];

$sql      = "UPDATE user SET name='$NAME', number='$NUMB', sex='$SEX' WHERE id='$ID_USER' ";

$query   = mysqli_query($connect, $sql) or die(mysqli_error($connect));


if ($query) {
    header("location: home.php?pesan=ubah");
} else {
    echo "Input Data Gagal";
}

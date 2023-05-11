<?php
session_start();

include 'connection.php';

$ID = $_POST['username'];
$PW = $_POST['password'];

$sql = " SELECT * FROM account WHERE username = '$ID' AND password = '$PW' ";
$sql2 = " SELECT id_user FROM user INNER JOIN account ON account.id_user = user.id WHERE username = '$ID' AND password = '$PW' ";

$query1 = mysqli_query($connect, $sql);
$query2 = mysqli_query($connect, $sql2);

while ($row = mysqli_fetch_array($query2)) {
    $numb = $row['id'];
}

$cek = mysqli_num_rows($query1);

if ($cek > 0) {
    $_SESSION['username'] = $ID;
    $_SESSION['id'] = $numb;
    $_SESSION['status']   = $login;
    header("location: home.php?pesan=login");
} else {
    header("location: login.php?pesan=gagal");
}

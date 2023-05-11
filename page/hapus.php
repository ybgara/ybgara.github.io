<?php

include 'connection.php';

$ID     = $_GET['del'];

$sql    = "DELETE FROM transaction WHERE ID = '$ID' ";

$query   = mysqli_query($connect, $sql);


if ($query) {
    header("location: home.php?pesan=hapus");
} else {
    echo "Input Data Gagal";
}

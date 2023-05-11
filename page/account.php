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

?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../style/style_account.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
<link rel="icon" href="../img/icon.jpg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up Game</title>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <a style="float:left;" disabled>
                    <h1>TASHOP</h1>
                </a>
                <div>
                    <div class="nav">
                        <div>
                            <a href="home.php">Home</a>
                            <a style="margin-right: 20px;" href="recharge.php">Recharge</a>
                            <a style="margin: 0px; color: white;"> | </a>
                            <a style="margin-left: 20px; margin-right: 0px;" href="account.php">Account</a>
                            <a style="margin: 0px; color: white;"> / </a>
                            <a href="logout.php" style="margin-left: 2px;">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
    </header>

    <div class="container">
        <div class="login">
            <h1>ACCOUNT</h1>
        </div>

        <div class="isi">
            <form action="">
                <div class="satu">
                    <div class="row">
                        <div class="col-4">
                            <table>

                                <?php
                                include('connection.php');

                                $sql    = "SELECT * FROM user WHERE user.id = $ID_USER ";
                                $query    = mysqli_query($connect, $sql);

                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <th>
                                            Nama Lengkap
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $data['name'] ?>
                                        </td>
                                    </tr>
                            </table>
                        </div>
                        <div class="col-4">
                            <table>
                                <tr>
                                    <th>
                                        Nomor Handphone
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $data['number'] ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-4">
                            <table>
                                <tr>
                                    <th>
                                        Jenis Kelamin
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $data['sex'] ?>
                                    </td>
                                </tr>

                            <?php } ?>

                            </table>
                        </div>
                    </div>
                    <div class="ubah">
                        <a href="ubah.php"><button type="button" class="btn btn-outline-dark">Ubah Profile</button></a>
                    </div>
                </div>
                <div class="dua">
                    <div class="judul">
                        <h1>TRANSACTION</h1>
                    </div>
                    <table class="table table-dark table-borderless">
                        <thead>
                            <tr style="font-size: 18px; text-decoration:underline ;">
                                <th scope="col">No</th>
                                <th scope="col">UID</th>
                                <th scope="col">Pesanan</th>
                                <th scope="col">Pembayaran</th>
                                <th scope="col">Proses</th>
                                </>
                        </thead>

                        <?php
                        include('connection.php');

                        $id = 0;

                        $sql    = "SELECT * FROM transaction INNER JOIN user ON transaction.id_user = user.id WHERE user.id = $ID_USER ";
                        $query    = mysqli_query($connect, $sql);

                        while ($data = mysqli_fetch_array($query)) {

                            $id++;
                        ?>
                            <tbody>
                                <tr>
                                    <td style="padding-top: 15px;"><?php echo $id ?></td>
                                    <td style="padding-top: 15px;"><?php echo $data['game'] ?></td>
                                    <td style="padding-top: 15px;"><?php echo $data['pay'] ?></td>
                                    <td style="padding-top: 15px;"><?php echo $data['uc'] ?></td>
                                    <td><a href="hapus.php?del=<?php echo $data['ID']; ?>"><button type="button" class="btn btn-outline-success">Terima</button></td></a>
                                </tr>
                            </tbody>

                        <?php } ?>

                    </table>

                    <div class="judul">
                        <h1>HISTORY</h1>
                    </div>

                    <table class="table table-dark table-borderless">
                        <thead>
                            <tr style="font-size: 18px; text-decoration:underline ;">
                                <th scope="col">No</th>
                                <th scope="col">UID</th>
                                <th scope="col">Pesanan</th>
                                <th scope="col">Pembayaran</th>
                            </tr>
                        </thead>

                        <?php
                        include('connection.php');

                        $id = 0;

                        $sql    = "SELECT * FROM history INNER JOIN user ON history.id_user = user.id WHERE user.id = $ID_USER ";
                        $query    = mysqli_query($connect, $sql);

                        while ($data = mysqli_fetch_array($query)) {

                            $id++;
                        ?>

                            <tbody>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $data['game'] ?></td>
                                    <td><?php echo $data['pay'] ?></td>
                                    <td><?php echo $data['uc'] ?></td>
                                </tr>
                            </tbody>

                        <?php } ?>

                    </table>
                    <div class="bottom">
                    </div>
                </div>
            </form>
        </div>
    </div>



    <footer>
        <div class="container">
            <div class="copyright">
                Copyright &copy; 2022 TASHOP
            </div>
    </footer>
</body>

</html>
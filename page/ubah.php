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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../style/style_ubah.css">
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
            <h1>UBAH PROFILE</h1>
        </div>
        <div class="isi">
            <form action="ubah_proses.php" method="POST">
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
                                            <input class="form-control" type="text" placeholder="Masukkan Nama" aria-label="default input example" name="name" value="<?php echo $data['name'] ?>">
                                        </td>
                                    </tr>
                            </table>
                        </div>
                        <div class="col-4">
                            <table>
                                <tr>
                                    <th>
                                        Nomer Handphone
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-control" type="text" placeholder="Masukkan Nomer" aria-label="default input example" name="numb" value="<?php echo $data['number'] ?>">
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
                                        <?php
                                        if ($data['sex'] == 'Laki Laki') { ?>
                                            <input type="radio" class="btn-check" name="sex" id="success-outlined" checked value="Laki Laki">
                                            <label class="btn btn-outline-success" for="success-outlined">Laki - Laki</label>
                                            <input type="radio" class="btn-check" name="sex" id="danger-outlined" value="Perempuan">
                                            <label class="btn btn-outline-success" for="danger-outlined">Perempuan</label>
                                        <?php } else if ($data['sex'] == 'Perempuan') { ?>
                                            <input type="radio" class="btn-check" name="sex" id="success-outlined" value="Laki Laki">
                                            <label class="btn btn-outline-success" for="success-outlined">Laki - Laki</label>
                                            <input type="radio" class="btn-check" name="sex" id="danger-outlined" checked value="Perempuan">
                                            <label class="btn btn-outline-success" for="danger-outlined">Perempuan</label>
                                        <?php } ?>
                                    </td>
                                </tr>

                            <?php } ?>

                            </table>
                        </div>
                    </div>
                    <div class="ubah">
                        <button type="submit" class="btn btn-outline-dark">Ubah</button>
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
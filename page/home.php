<!DOCTYPE html>
<html lang="en">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../style/style_home.css">
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

        <div class="note">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "ubah") {
                    echo " Edit Profil Berhasil ! Silahkan Cek Pada Menu Akun. ";
                } else if ($_GET['pesan'] == "topup") {
                    echo " Recharge Berhasil ! Silahkan Cek Pada Menu Akun. ";
                } else if ($_GET['pesan'] == "login") {
                    echo " Login Berhasil ! ";
                } else if ($_GET['pesan'] == "hapus") {
                    echo " UC Diterima ! Silahkan Cek Pada Menu Akun. ";
                }
            }
            ?>
        </div>

        <div class="isi">
            <div class="home">
                <h1>WELCOME</h1>
                <h2>Keep Trying Till Dying</h2><br><br>
                <a href="recharge.php"> Go Recharge </a></button><br>
                <img src="../img/ig.png" alt="instagram">
                <img src="../img/fb.png" alt="facebook">
            </div>
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
<!DOCTYPE html>
<html lang="en">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../style/style_login.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style/style.css">
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
            <nav class="navbar navbar-expand-lg bg-light">
                <a class="navbar-brand" style="float:left;" disabled>
                    <h1 style="margin-top: -5px; color: white;">TASHOP</h1>
                </a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="nav">
                        <div class="navbar-nav">
                            <a class="nav-link" href="../index.php">Home</a>
                            <a class="nav-link" style="margin-right: 20px;" href="recharge.php">Recharge</a>
                            <a style="margin: 0px;"> | </a>
                            <a class="nav-link" style="margin-left: 20px; margin-right: 0px;" href="sign_up.php">Sign Up</a>
                            <a style="margin: 0px;"> / </a>
                            <a class="nav-link" href="login.php">Log In</a>
                        </div>
                    </div>
                </div>
            </nav>
    </header>

    <div class="container">
        <div class="login">
            <h1>LOGIN</h1>
        </div>

        <div class="note">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo " Login Gagal ! Silahkan Cek Ulang Username dan Password Anda. ";
                } else if ($_GET['pesan'] == "logout") {
                    echo " Logout Berhasil ! ";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo " Silahkan Login Untuk Mengakses Halaman. ";
                }
            }
            ?>
        </div>

        <form action="login_cek.php" method="POST">
            <div class="isi">
                <img src="../img/bp.png" alt="">
                <div class="bio">
                    <div class="bioooo">
                        <div class="mb-3">
                            <label for=""> USERNAME </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username" name="username" required>
                        </div>

                        <div class="mb-3">
                            <label for=""> PASSWORD </label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-outline-dark">LOGIN</button>

                    </div>
                </div>
            </div>
        </form>
    </div>



    <footer>
        <div class="container">
            <div class="copyright">
                Copyright &copy; 2022 TASHOP
            </div>
    </footer>
</body>

</html>
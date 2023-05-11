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
<link rel="stylesheet" href="../style/style_recharge.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../style/style_recharge.css    ">
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
            <h1> RECHARGE </h1>
        </div>

        <div class="isi">
            <form action="recharge_proses.php" method="POST">
                <div class="satu">
                    <div class="row">
                        <div class="col-6">
                            <div class="kiri">
                                <label for="">Masukkan ID</label>
                                <input class="form-control" type="text" placeholder="Masukkan ID" aria-label="default input example" name="uid" required>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="kanan">
                                <label for="">Metode Pembayaran</label>
                                <select class="form-select" aria-label="Default select example" name="pay" required>
                                    <option value="Dana">Dana</option>
                                    <option value="Shopee Pay">Shopee Pay</option>
                                    <option value="Bank">Bank</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dua">
                    <div class="grid-container">
                        <div class="grid-item"><button type="submit" class="list-group-item list-group-item-action" name="item" value="5000 UC"><img src="../img/uc.png" alt="uc"><br> 5000 UC <br> Rp1.000.000 </button></div>
                        <div class="grid-item"><button type="submit" class="list-group-item list-group-item-action" name="item" value="2500 UC"><img src="../img/uc.png" alt="uc"><br> 2500 UC <br> Rp500.000 </button></div>
                        <div class="grid-item"><button type="submit" class="list-group-item list-group-item-action" name="item" value="1250 UC"><img src="../img/uc.png" alt="uc"><br> 1250 UC <br> Rp250.000 </button></div>
                        <div class="grid-item"><button type="submit" class="list-group-item list-group-item-action" name="item" value="500 UC"><img src="../img/uc.png" alt="uc"><br> 500 UC <br> Rp125.000 </button></div>
                        <div class="grid-item"><button type="submit" class="list-group-item list-group-item-action" name="item" value="250 UC"><img src="../img/uc.png" alt="uc"><br> 250 UC <br> Rp75.000 </button></div>
                        <div class="grid-item"><button type="submit" class="list-group-item list-group-item-action" name="item" value="125 UC"><img src="../img/uc.png" alt="uc"><br> 125 UC <br> Rp50.000 </button></div>
                        <div class="grid-item"><button type="submit" class="list-group-item list-group-item-action" name="item" value="70 UC"><img src="../img/uc.png" alt="uc"><br> 70 UC <br> Rp25.000 </button></div>
                        <div class="grid-item"><button type="submit" class="list-group-item list-group-item-action" name="item" value="50 UC"><img src="../img/uc.png" alt="uc"><br> 50 UC <br> Rp15.000 </button></div>
                        <div class="grid-item"><button type="submit" class="list-group-item list-group-item-action" name="item" value="35 UC"><img src="../img/uc.png" alt="uc"><br> 35 UC <br> Rp10.000 </button></div>
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
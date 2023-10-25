<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>Home</title>
</head>
<body>
    <?php 
    // Membuka session
    session_start();

    // Periksa jika session 'id' telah diatur dan buat variabel $res_Uname dan $res_email
    if (isset($_SESSION['id'])) {
        $res_nama = $_SESSION['Nama'];
        $res_nohp = $_SESSION['No Handphone'];
        $res_alamat = $_SESSION['Alamat'];
        $res_pilpeng = $_SESSION['Pilihan Pengambilan'];
    }
    ?>

    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Homie Laundry</a></p>
        </div>
    </div>
    
    <main>
        <div class="main-box top">
                <div class="box">
                    <p>Hello <b><?php echo $res_nama ?></b>. Welcome to Homie Laundry</p>
                </div>
                <div class="box">
                    <p>Nomor Handphone Kamu<b><?php echo $res_nohp ?></b>.</p>
                </div>
            </div>
                <div class="box">
                <p>Alamat Kamu<b><?php echo $res_alamat ?></b>.</p>
                </div>
                <div class="box">
                <p>Pilihan Pengambilan<b><?php echo $res_pilpeng ?></b>.</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="navbar.css"/>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css"/>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Order Now</title>
    <style>
        .output {
            margin-top: 20px;
        }
    </style>
</head>

<?php include 'header.php'; ?>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Order Now</header>
            <?php if (!isset($_POST['submit'])) { ?>
            <form action="" method="post">
                <div class="field input">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" autocomplete="off" required />
                </div>
                <div class="field input">
                    <label for="nohp">No Handphone</label>
                    <input type="text" name="nohp" id="nohp" autocomplete="off" required />
                </div>
                <div class="field input">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" autocomplete="off" required />
                </div>
                <div class="field input">
                <label for="pengambilan">Pilihan Pengambilan</label>
                <select name="pengambilan" id="pengambilan" required>
                    <option value="">-----</option>
                    <option value="Antar Jemput">Antar Jemput</option>
                    <option value="Ambil Ditempat">Ambil Ditempat</option>
                </select>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Submit" />
                </div>
                
            </form>
            <?php } else { ?>
            <div class="output">
                <?php
                $nama = $_POST['nama'];
                $nohp = $_POST['nohp'];
                $alamat = $_POST['alamat'];
                $pengambilan = $_POST['pengambilan'];

                echo "<p><b>Nama</b>: $nama </p>";
                echo "<p><b>No Handphone</b>: $nohp</p>";
                echo "<p><b>Alamat</b>: $alamat</p>";
                echo "<p><b>Pengambilan</b>: $pengambilan</p>";
                ?>
            </div>
            <button onclick="goBack()" class="btn">Kembali</button>
            <?php } ?>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

<script src="script.js"></script>
</body>
</html>
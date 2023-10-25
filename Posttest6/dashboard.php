<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Jika tidak ada sesi, kembali ke halaman login
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="animated-heading">Admin Dashboard</h1>
        <p><b>Selamat datang</b></p>
        <div class="logout-button">
            
            <a href="sistem/logout.php"><button class="logout-button">Logout</button></a>
        </div>
        <div id="date-time">

        <p><?php
        date_default_timezone_set('Asia/Makassar');
        echo date("l, d F Y e"); ?></p>
    </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include 'sistem/koneksi.php';

                // Query untuk mengambil data dari database
                $sql = "SELECT * FROM account";
                $result = $conn->query($sql);
                // $no = 1;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($row['username'] == 'admin' && $row['password'] == 'admin') {
                            continue; // Jika akun adalah "admin", skip ke iterasi berikutnya.
                        }
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row["username"]; ?></td>
                            <td><?php echo $row["password"]; ?></td>
                            <td>
                                <img src="gambar/<?php echo $row['gambar']; ?>" alt="Gambar" width="100">
                            </td>
                            <td>
                                <button class="edit-button" onclick="showEditForm(<?php echo $row['id']; ?>)">Edit</button>
                                <a href="sistem/delete.php?id=<?php echo $row['id']; ?>"><button class="delete-button">Hapus</button></a>
                            </td>
                        </tr>
                <?php
                        // $no++;
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data yang ditemukan.</td></tr>";
                }

                ?>
            </tbody>

            <table>
                <form id="item-form" method="post" action="sistem/create.php" enctype="multipart/form-data">
                    <h2 id="form-title">Tambah Data</h2>
                    <input name="username" type="text" id="item-name" placeholder="Masukkan Username" required>
                    <input name="password" type="password" id="item-password" placeholder="Masukkan Password" required>
                    <input name="gambar" type="file" id="item-image1" accept="image/*" onchange="previewImage1(event)">
                    <img id="preview1" src="#" alt="Preview Gambar" style="display: none; max-width: 200px; max-height: 200px;">
                    <button type="submit" class="submit-button" id="submit-button">Tambah</button>
                </form>
            </table>

            <!-- edit-item-name -->
            <div class="edit-form" id="edit-form" style="display: none;">
                <h2>Edit Item</h2>
                <form method="post" action="sistem/update.php" id="edit-form-data" enctype="multipart/form-data">
                    <input name="id" type="hidden" id="edit-id" value="">
                    <input name="username" type="text" placeholder="Masukkan Username" id="edit-username" required>
                    <input name="password" type="password" placeholder="Masukkan Password" id="edit-password" required>
                    <input name="gambar" type="file" id="item-image2" accept="image/*" onchange="previewImage2(event)">
                    <img id="preview2" src="#" alt="Preview Gambar" style="display: none; max-width: 200px; max-height: 200px;">
                    <button class="save-button">Simpan</button>
                    <button class="cancel-button" type="button" id="edit-cancel">Batal</button>
                </form>
            </div>

    </div>

    <script src="dashboard.js"></script>
    <script>
        function showEditForm(id) {
            // Isi formulir edit dengan data yang sesuai
            var editForm = document.getElementById('edit-form');
            var editId = document.getElementById('edit-id');
            var editUsername = document.getElementById('edit-username');
            var editPassword = document.getElementById('edit-password');
            var editCancel = document.getElementById('edit-cancel');

            editId.value = id;

            // Dapatkan data dari tabel dan isi formulir edit
            var table = document.querySelector('table');
            var rows = table.querySelectorAll('tr');

            for (var i = 0; i < rows.length; i++) {
                var cells = rows[i].querySelectorAll('td');
                if (cells.length > 0 && cells[0].innerText == id) {
                    editUsername.value = cells[1].innerText;
                    editPassword.value = cells[2].innerText;
                    break;
                }
            }

            // Tampilkan formulir edit
            editForm.style.display = 'block';

            // Atur tindakan pembatalan
            editCancel.onclick = function() {
                editForm.style.display = 'none';
            };
        }

        function previewImage1(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById('preview1').src = e.target.result;
                    document.getElementById('preview1').style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function previewImage2(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById('preview2').src = e.target.result;
                    document.getElementById('preview2').style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>
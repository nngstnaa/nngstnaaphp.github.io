<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Tentukan direktori penyimpanan gambar
    $uploadDir = '../gambar/';

    // Cek apakah file gambar telah diunggah
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        // Ambil informasi file gambar
        $fileExtension = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
        $date = date('Y-m-d');
        $fileName = $date . ' ' . uniqid() . '.' . $fileExtension;
        $fileTmp = $_FILES['gambar']['tmp_name'];

        // Pindahkan file gambar ke direktori tujuan
        if (move_uploaded_file($fileTmp, $uploadDir . $fileName)) {
            // Query untuk menambah data beserta nama file gambar ke database
            $sql = "INSERT INTO account (username, password, gambar) VALUES ('$username', '$password', '$fileName')";

            if ($conn->query($sql) === TRUE) {
                header('Location: ../dashboard.php'); // Redirect ke halaman utama setelah berhasil menambah data
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading image.";
            exit();
        }
    } else {
        // Query untuk menambah data tanpa gambar ke database
        $sql = "INSERT INTO account (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            header('Location: ../dashboard.php'); // Redirect ke halaman utama setelah berhasil menambah data
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

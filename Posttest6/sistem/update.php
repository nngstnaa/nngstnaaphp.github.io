<?php
require 'koneksi.php';
// Memperbarui item
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

// Memeriksa apakah ada file gambar yang diunggah
if ($_FILES['gambar']['size'] > 0) {
    $targetDir = "../gambar/"; // Ganti dengan lokasi upload gambar Anda
    $date = date('Y-m-d');
    $fileName = $date . ' ' . basename($_FILES['gambar']['name']);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Mengunggah file gambar baru
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFilePath)) {
        // Memperbarui data item termasuk gambar
        $sql = "UPDATE account SET username='$username', password='$password', gambar='$fileName' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header('Location: ../dashboard.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
} else {
    // Memperbarui data item tanpa mengubah gambar
    $sql = "UPDATE account SET username='$username', password='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
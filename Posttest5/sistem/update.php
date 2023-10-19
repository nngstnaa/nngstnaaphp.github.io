<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mengedit data dalam database
    $sql = "UPDATE account SET username='$username', password='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../dashboard.php'); // Redirect ke halaman utama setelah berhasil mengedit data
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

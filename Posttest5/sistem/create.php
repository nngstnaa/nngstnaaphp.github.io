<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk menambah data ke database
    $sql = "INSERT INTO account (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../dashboard.php'); // Redirect ke halaman utama setelah berhasil menambah data
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

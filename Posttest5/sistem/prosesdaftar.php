<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi apakah password dan konfirmasi password sesuai
    if ($password !== $confirm_password) {
        // Password tidak sesuai, bisa ditangani sesuai dengan kebutuhan Anda, misalnya:
        echo "Konfirmasi password tidak sesuai.";
    } else {
        // Hash password sebelum menyimpan ke database (pastikan Anda sudah mengimpor library bcrypt)

        // Query untuk menyimpan data ke database
        $sql = "INSERT INTO account (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            // Registrasi sukses, bisa melakukan redirect atau tindakan lain sesuai kebutuhan Anda
            header('Location: ../login.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

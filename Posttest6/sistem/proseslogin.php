<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi login (Anda perlu menggantinya sesuai dengan konfigurasi database Anda)
    $conn = new mysqli('localhost', 'root', '', 'pt');

    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM account WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if ($username === 'admin' && $password === 'admin') {
            // Redirect ke dashboard jika username dan password adalah "admin"
            $_SESSION['username'] = $username;
            header("Location: ../dashboard.php");
        } elseif ($password === $row['password']) {
            // Redirect ke halaman setelah login jika password sesuai
            $_SESSION['username'] = $username;
            header("Location: ../index.php"); // Gantilah dengan halaman setelah login
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Username tidak ditemukan.";
    }

    $conn->close();
}
?>

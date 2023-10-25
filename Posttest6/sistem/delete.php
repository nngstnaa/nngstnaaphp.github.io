<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];

    // Mengambil nama file gambar berdasarkan ID
    $sql = "SELECT gambar FROM account WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $gambarPath = "../gambar/" . $row['gambar'];

        // Menghapus data dari database
        $deleteSql = "DELETE FROM account WHERE id=$id";

        if ($conn->query($deleteSql) === TRUE) {
            // Menghapus file gambar
            if (unlink($gambarPath)) {
                header('Location: ../dashboard.php');
            } else {
                echo "Gagal menghapus file gambar.";
            }
        } else {
            echo "Error: " . $deleteSql . "<br>" . $conn->error;
        }
    } else {
        echo "Data tidak ditemukan.";
    }
}

$conn->close();
?>
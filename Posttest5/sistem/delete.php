<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];

    // Query untuk menghapus data dari database
    $sql = "DELETE FROM account WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../dashboard.php'); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

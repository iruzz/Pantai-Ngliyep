<?php
require 'functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (hapus($id) > 0) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href = 'admin.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data');</script>";
        echo "<script>window.location.href = 'admin.php';</script>";
    }
} else {
    // Kalau akses langsung tanpa ID, langsung redirect aja
    header("Location: admin.php");
    exit;
}

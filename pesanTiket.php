<?php
require 'functions.php';

if(isset($_POST["submit"])) {
    if(tambah($_POST) > 0) {
        echo "<script>alert('berhasil')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Camping di Pantai Ngliyep</title>
    <link rel="stylesheet" href="styles/p.css">
</head>
<body backgro>
    <div class="container">
        <h2>Pemesanan Tiket Camping di Pantai</h2>
        <form action="" method="post">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" placeholder="  Masukkan Nama Lengkap Anda">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="   Masukkan Email Anda">

            <label for="nomer">No Telepon</label>
            <input type="number" name="nomer" id="nomer" placeholder="   Masukkan Nomer Anda">
         
            <label for="jumlah">Jumlah Orang</label>
            <input type="number" name="orang" id="orang">
            
            <label for="catatan">Catatan Tambahan</label>
            <textarea name="" name="catatan" id="catatan" rows="4"></textarea>

            <button type="submit" name="submit">Pesan Sekarang</button>
        </form>
    </div>
</body>
</html>
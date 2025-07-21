<?php 
require 'functions.php';
$id = $_GET['edit'];
$data = pelanggan("SELECT * FROM admin WHERE id = $id")[0];

if(isset ($_POST['submit'])) {
    if (ubah($_GET['edit']) > 0 ){
        echo "<script>alert('berhasil')</script>";
        echo "<script> window.location.href = 'admin.php'; </script>";
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
    <title>Edit Data</title>
    <link rel="stylesheet" href="styles/edit.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Admin</h1>
        <form method="post">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($data['nama']) ?>">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?= htmlspecialchars($data['email']) ?>">

            <label for="nomer">Nomor HP:</label>
            <input type="text" id="nomer" name="nomer" value="<?= htmlspecialchars($data['nomer']) ?>">

            <label for="orang">Jumlah Orang:</label>
            <input type="text" id="orang" name="orang" value="<?= htmlspecialchars($data['orang']) ?>">

            <label for="catatan">Catatan:</label>
            <input type="text" id="catatan" name="catatan" value="<?= htmlspecialchars($data['catatan']) ?>">

            <button type="submit" name="submit">Simpan</button>
        </form>
    </div>
</body>
</html>

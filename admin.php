<?php 
require 'functions.php';
$hitam = pelanggan("SELECT * FROM admin");

if (isset($_POST["sub"])) {
    $hitam = cari($_POST["keyword"]);
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Admin</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>

    <h1>Data Pelanggan</h1>

    <form method="post" class="search-form">
        <input type="text" name="keyword" placeholder="Cari nama/email/nomer..." autocomplete="off">
        <button type="submit" name="sub">Cari</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomer</th>
                <th>Orang</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; foreach($hitam as $htm): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= htmlspecialchars($htm["nama"]); ?></td>
                <td><?= htmlspecialchars($htm["email"]); ?></td>
                <td><?= htmlspecialchars($htm["nomer"]); ?></td>
                <td><?= htmlspecialchars($htm["orang"]); ?></td>
                <td><?= htmlspecialchars($htm["catatan"]); ?></td>
                <td>
                    <a class="edit" href="edit.php?edit=<?= $htm['id']; ?>">Edit</a> |
                    <a class="hapus" href="delete.php?id=<?= $htm['id']; ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr> 
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>

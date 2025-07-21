<?php 
require 'functions.php';
$hitam = pelanggan("SELECT * FROM admin");
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
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; foreach($hitam as $htm) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= htmlspecialchars($htm["nama"]); ?></td>
            <td>
                <a href="edit.php?id=<?= $htm['id']; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $htm['id']; ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr> 
        <?php endforeach; ?>
    </table>

</body>
</html>

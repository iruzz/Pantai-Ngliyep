<?php
$conn = mysqli_connect("localhost", "root", "12345", "pantai");



function tambah() {
    global $conn;

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomer = $_POST['nomer'];
    $orang = $_POST['orang'];
    $catatan = $_POST['catatan'];

    $query = "INSERT INTO admin VALUES (
                null, '$nama', '$email','$nomer', '$orang', '$catatan'
                )";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
     
}

function pelanggan($perintah) {
    global $conn;
    $result = mysqli_query($conn, $perintah);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    } return $rows;
}


?>
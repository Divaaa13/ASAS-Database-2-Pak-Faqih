<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NISN</th>
        <th>Gender</th>
        <th>Kelas</th>
        <th>Alamat</th>
    </tr>

    <?php
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM siswa");

    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['nisn']; ?></td>
            <td><?= $d['jenis_kelamin']; ?></td>
            <td><?= $d['kelas']; ?></td>
            <td><?= $d['alamat']; ?></td>
        </tr>
    <?php } ?>

</table>

<br>
<a href="index.php">Tambah Data</a>

</body>
</html>
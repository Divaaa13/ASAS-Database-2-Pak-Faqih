<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa</title>
</head>
<body>

<h2>Form Pendaftaran Siswa</h2>

<form method="POST" action="proses.php">

    Nama:
    <input type="text" name="nama" required>
    <br><br>

    NISN:
    <input type="text" name="nisn" required>
    <br><br>

    Jenis Kelamin:
    <select name="jk">
        <option>Laki-laki</option>
        <option>Perempuan</option>
    </select>
    <br><br>

    Kelas:
    <input type="text" name="kelas" required>
    <br><br>

    Alamat:
    <textarea name="alamat"></textarea>
    <br><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>
<?php
include('koneksi.php');
if (isset($_POST['btnSimpan'])) {
    # code...
    $nim = $_POST['txtNim'];
    $nama = $_POST['txtNama'];
    $alamat = $_POST['txtAlamat'];
    $jk = $_POST['rdKelamin'];
    echo 'Nim :' . $nim . 'jenis kelamin : ' . $jk . 'nama :' . $nama . ' alamat : ' . $alamat;

    $query = "INSERT INTO mahasiswa (nim,nama,alamat,jenis_kelamin) VALUES('$nim','$nama','$alamat','$jk')";
    $sql = mysqli_query($connect, $query);
    echo $query;

    if (!$sql) {
        # code...
        echo 'tidak berhasil';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahaiswa</title>
</head>

<body>
    <a href="tampil.php">Tampil</a>
    <br>
    <form action="tampil.php" method="POST" enctype="multipart/form-data">
        <label for="nim">Nim</label>
        <input type="text" name="txtNim" id="nim">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="txtNama" id="nama">
        <br>
        <label for="alamat">Alamat</label>
        <textarea name="txtAlamat" id="alamat" cols="20" rows="10">

        </textarea>
        <br>
        <label for="">Jenis Kelamin</label>
        <input type="radio" name="rdKelamin" id="laki" value="L">
        <label for="laki">Laki-laki</label>
        <input type="radio" name="rdKelamin" id="perempuan" value="P">
        <label for="perempuan">Perempuan</label>
        <br>
        <button type="submit" name="btnSimpan">Simpan</button>


    </form>
</body>

</html>
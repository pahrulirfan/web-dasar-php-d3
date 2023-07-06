<?php
include('koneksi.php');
$sql = "SELECT * FROM mahasiswa";
$query = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Mahasiswa</title>
</head>

<body>
    <h3>
        <a href="tambah.php">Tambah Data</a>
    </h3>
    <table>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <!-- ini yang kan kita ulangi -->
        <?php
        while ($result = mysqli_fetch_array($query)) {
        ?>

        <tr>
            <td><?php echo $result['nim']; ?></td>
            <td><?= $result['nama'] ?></td>
            <td><?= $result['alamat'] ?></td>
            <td><?= $result['jenis_kelamin'] ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="hapus.php?id=<?= $result['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
        <!-- batas perulanganya -->
    </table>
</body>

</html>
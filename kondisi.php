<!DOCTYPE html>
<html>

<head>
    <title>Kondisi PHP</title>
</head>

<body>

    <h2>Belajar Kondisi</h2>

    <?php
    $umur = 20;

    if ($umur > 20) {
        echo 'umur ' . $umur . 'Kategori Dewasa';
    } else {
        echo 'umur ' . $umur . 'Kategori Remaja';
    }

    echo '<hr>';

    $nilai_akhir = 1000;

    if ($nilai_akhir <= 50) {
        echo 'Tidak Lulus';
    } else {
        echo 'Lulus';
    } 
    echo '<hr>';

    if ($nilai_akhir >= 81 and $nilai_akhir <= 100) {
        echo 'Grade A';
    } else if ($nilai_akhir >= 70 and $nilai_akhir <= 80){
        echo 'Grade B';
    } else {
        echo 'Grade C';
    }

    ?>

</body>

</html>
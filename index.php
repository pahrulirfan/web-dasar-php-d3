<!DOCTYPE html>
<html lang="en">

<head>
    <title>Belajar PHP</title>
</head>

<body>

    <h2>Belajar PHP</h2>

    <?php
    # coding php
    echo 'Cetak dari PHP <br>';

    $umur = 25;
    echo 'Umur anda : ' . $umur . ' Tahun <br>';

    $umur = 29;
    echo 'Umur anda : ' . $umur . ' Tahun <br>';

    // const age = 30;
    // echo 'age : ' . age . '<br>';
    
    // const age = 49;
    // echo 'age : ' . age . '<br>';
    

    $alamat = 'Jln. Merdeka Raya';
    echo 'Alamat anda : ' . $alamat . '<br>';

    // var_dump($umur);

    echo '<hr>';
    $profile = array(
        'umur' => 19,
        'alamat' => 'Mataram',
        'tempat_lahir' => 'Yogyakarta'
    );

    echo 'umur anda : ' . $profile['umur'] . '<br>';
    echo 'alamat anda : ' . $profile['alamat'] . '<br>';
    echo 'tempat lahir anda : ' . $profile['tempat_lahir'] . '<br>';

    ?>

</body>

</html>
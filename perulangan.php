<!DOCTYPE html>
<html>

<head>
    <title>Perulangan PHP</title>
</head>

<body>
    <h2>Belajar Perulangan</h2>
    <h3>Perulangan For</h3>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i . ' ';
        }
    ?>
    <h3>Perulangan While</h3>
    <?php
        $j = 1;
        while($j <= 10) {
            echo $j++ . ' ';
        }
    ?>

</body>

</html>
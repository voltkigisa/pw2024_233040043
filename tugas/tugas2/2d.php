<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>papan catur</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

       
        .kotakPutih {
            width: 50px;
            height: 50px;
            display: inline-block;
            background-color: white;
        }

        .kotakHitam {
            width: 50px;
            height: 50px;
            display: inline-block;
            background-color: black;
        }
    </style>

</head>

<body>
    
    <?php
    for ($baris = 1; $baris <= 5; $baris++) {
        echo "<br>";
        for ($kolom = 1; $kolom <= 5; $kolom++) {
            if (($kolom + $baris) % 2 == 1) {
                echo '<div class=kotakPutih></div>';
            } else {
                echo '<div class=kotakHitam></div>';
            }
        }
    }
    ?>
</body>
</html>
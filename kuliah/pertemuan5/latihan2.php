<?php 
$binatang = ["🐱", "🐰", "🐵", "🐨", "🐮", "🐟"];
$makanan = ["🍛", "🍣", "🍜", "🍙", "🍱"];
?>

<!-- CTRL+D seleksi kata -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>

<!-- hewan -->
    <h3>Daftar Binantang</h3>

    <!-- <ol>
        <?php for($i = 0; $i <= 4; $i++){?>
            <li><?= $binatang[$i]; ?> </li>
        <?php } echo "<hr>";?>
    </ol> -->
    
    <ol>
        <?php for($i = 0; $i < count($binatang); $i++){?>
            <li><?= $binatang[$i]; ?> </li>
        <?php } echo "<hr>";?>
    </ol>

    
    
    <!-- makanan -->
    <h3>daftar Makanan</h3>
    <ol>
        <?php for($i = 0; $i < count($makanan); $i++){?>
            <li><?= $makanan[$i]; ?> </li>
        <?php } echo "<hr>";?>
    </ol>

        <!-- cara 2 -->
        <h3>Daftar Binantang</h3>
        <ol>
           <?php foreach($binatang as $bntg):?>
               <li><?= $bntg ; ?> </li>
           <?php endforeach; echo "<hr>"; ?>
       </ol>

        <h3>Daftar Binantang</h3>
        <ol>
           <?php foreach($makanan as $bntg):?>
               <li><?= $bntg ; ?> </li>
           <?php endforeach; echo "<hr>"; ?>
       </ol>
</body>
</html>
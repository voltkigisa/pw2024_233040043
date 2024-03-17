 <?php 
// $mahasiswa=[["Raden Indra", "233040043", "radenprawirajaya@gmail.com", "Teknik Informatika"],
// ["Prawirajaya", "233040150", "prawirajaya@gmail.com", "Teknik Informatika"]];

//  array associative
//  definisinya sama seperti array numerik kecuali, 
//  keynya(indexnya) adalah string yang kita buat sendiri
$mahasiswa=[
    [
        "nama"=>"Raden",
        "nrp"=> "233040043",
        "email"=>"raden@gmail.com",
        "jurusan"=>"Teknik Informatika",
        "tugas"=>[90,80,100],
        "gambar"=>"email.png"
    ], 
    [
        "nama"=>"Prawirajaya",
        "nrp"=> "233040150",
        "email"=>"prawirajaya@gmail.com",
        "tugas"=>[90,80,100],
        "jurusan"=>"Teknik Industri",
        "gambar"=>"github.png"
    ],
    [
        "nama"=>"aidil",
        "nrp"=> "233040000",
        "email"=>"aidil@gmail.com",
        "jurusan"=>"Teknik Mesin ",
        "tugas"=>[90,80,100],
        "gambar"=>"facebook.png"
    ], 
    [
        "nama"=>"ismail",
        "nrp"=> "233040150",
        "email"=>"ismail@gmail.com",
        "tugas"=>[90,80,100],
        "jurusan"=>"Teknologi Pangan",
        "gambar"=>"logoapk.png"
    ],
    [
        "nama"=>"Indra",
        "nrp"=> "233040050",
        "email"=>"indra@gmail.com",
        "jurusan"=>"Perancangan Wilayah dan kota",
        "tugas"=>[90,80,100],
        "gambar"=>"ig.png"
    ], 
    [
        "nama"=>"facrul",
        "nrp"=> "233040100",
        "email"=>"facrul@gmail.com",
        "tugas"=>[90,80,100],
        "jurusan"=>"Teknik Sipil",
        "gambar"=>"logosteam.png"
    ],
    [
        "nama"=>"Nanda",
        "nrp"=> "233040090",
        "email"=>"nanda@gmail.com",
        "jurusan"=>"Teknik Informatika",
        "tugas"=>[90,80,100],
        "gambar"=>"logotiktok.png"
    ], 
    [
        "nama"=>"Rafi",
        "nrp"=> "233040001",
        "email"=>"rafi@gmail.com",
        "tugas"=>[90,80,100],
        "jurusan"=>"Teknik Sipil",
        "gambar"=>"logoyoutube.png"
    ],
    [
        "nama"=>"Gilgamesh",
        "nrp"=> "233040047",
        "email"=>"gilgamesh@gmail.com",
        "jurusan"=>"Teknik Informatika",
        "tugas"=>[90,80,100],
        "gambar"=>"wa.png"
    ], 
    [
        "nama"=>"Arthur",
        "nrp"=> "233040010",
        "email"=>"arthur@gmail.com",
        "tugas"=>[90,80,100],
        "jurusan"=>"Teknik Industri",
        "gambar"=>"logogedung.png"
    ]
    ];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $mhs):;?>
    <ul>
            <li>Nama    :<?= $mhs["nama"]; ?></li>
            <li>NRP     : <?= $mhs["nrp"]; ?></li>
            <li>Email   :<?= $mhs["email"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
            <?php foreach($mhs["tugas"] as $tgs):?>
                <li>Tugas   :<?= $tgs; ?></li>
            <?php endforeach; ?>
            <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
            <br>
    </ul>
<?php endforeach; ?>
</body>
</html>



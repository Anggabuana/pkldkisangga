<?php
// $mahasiswa = [["kevin","151501010","kevin01@gmail.com","Ilmu komunikasi"],
//               ["dik","151500000","dikuy@gmail.com","Ilmu komunikasi"],
// ];

//array associative
//definisi sama seperti array numerik, kecuali
//keynya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "kevin",
    "nrp" => "151501010",
    "email" => "kevin01@gmail.com",
    "jurusan" => "Ilmu komunikasi",
    "gambar" => "dika.jpg"
    ],
    [
    "nama" => "dika",
    "nrp" => "151501011",
    "email" => "dika01@gmail.com",
    "jurusan" => "Ilmu komunikasi",
    "gambar" => "dengol.jpg"

    ],
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

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs ["gambar"]; ?>">
        </li>
        <li> Nama : <?= $mhs["nama"]; ?></li>
        <li>  NRP : <?= $mhs["nrp"]; ?></li>
        <li> Email : <?= $mhs["email"]; ?></li>
        <li> Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>

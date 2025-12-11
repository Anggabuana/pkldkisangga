<?php
//$_GET

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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"];?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?> &jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"]; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>
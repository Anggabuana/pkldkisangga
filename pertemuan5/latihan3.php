<?php
$mahasiswa = [["kevin","151501010","Ilmu komunikasi","kevin01@gmail.com"]
,["dik","151500000","Ilmu komunikasi","dikuy@gmail.com"],
["bambang","151511111","Ilmu komunikasi","bambang01@gmail.com"]
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
        <li> Nama : <?= $mhs[0]; ?></li>
        <li> NRP : <?= $mhs[1]; ?></li>
        <li> Jurusan : <?= $mhs[2]; ?></li>
        <li> Email : <?= $mhs[3]; ?></li>
    </ul>

    <?php endforeach; ?>
</body>
</html>
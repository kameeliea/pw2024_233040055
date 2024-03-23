<?php
$mahasiswatif = [
    [
        "nama" => "Ariska Putri",
        "nrp" => "233040041",
        "email" => "ariskaputri918@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ariska.jpg",
    ],
    [
        "nama" => "Chalida Rahma Listy Hidayat",
        "nrp" => "233040046",
        "email" => "chalidarlh@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "chalida.jpg",
    ],
    [
        "nama" => "Dea Wardini",
        "nrp" => "233040003",
        "email" => "deawardini90@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dea.jpg",
    ],
    [
        "nama" => "Dera Triyadi Fatimah",
        "nrp" => "233040146",
        "email" => "dera.233040146@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dera.jpg",
    ],
    [
        "nama" => "Ellen Aplida Zalni",
        "nrp" => "233040061",
        "email" => "ellenaplidazalni@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ellen.jpg",
    ],
    [
        "nama" => "Haifa Zahirah Ramdhan",
        "nrp" => "233040051",
        "email" => "haifazahirahr5@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "haifa.jpg",
    ],
    [
        "nama" => "Meta Cantika Dewi",
        "nrp" => "233040100",
        "email" => "metacantika130506@gmail.con",
        "jurusan" => "Teknik Informatika",
        "gambar" => "meta.jpg",
    ],
    [
        "nama" => "Nada Putri Aqilah Rukanda",
        "nrp" => "233040038",
        "email" => "putrriaqilah05@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nada.jpg",
    ],
    [
        "nama" => "Nurfatimah",
        "nrp" => "233040074",
        "email" => "nurfatimahhh1603z@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nur.jpg",
    ],
    [
        "nama" => "Daffa Kamiliya Mufidah",
        "nrp" => "233040055",
        "email" => "kamiliyamufidah16@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "amel.jpg",
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar 10 Mahasiawa TIF</title>
</head>

<body>
    <h1>Daftar 10 Mahasiswa TIF</h1>

    <?php foreach ($mahasiswatif as $tif) : ?>
        <ul>
            <li>
                <img src="img/<?= $tif["gambar"]; ?>">
            </li>
            <li>Nama : <?= $tif["nama"]; ?></li>
            <li>NRP : <?= $tif["nrp"]; ?></li>
            <li>Email : <?= $tif["email"]; ?></li>
            <li>Jurusan : <?= $tif["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>
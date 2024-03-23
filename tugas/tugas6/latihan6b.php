<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6b</title>
    <style>
        .pink {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;
            background-color: pink;
            border: 2px solid black;
        }

        .whitesmoke {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;
            background-color: whitesmoke;
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        Masukkan angka:
        <input type="text" name="angka">
        <button type="submit" name="submit">Tampilkan</button>
    </form>

    <br>

    <?php
    if (isset($_POST["angka"])) {
        $angka = $_POST["angka"];
        for ($i = $angka; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % 2 == 0) {
                    echo "<div class= 'pink'>$i</div>";
                } else {
                    echo "<dic class= 'whitesmoke'>$i</div>";
                }
            }
            echo "<br>";
        }
    } else {
    }
    ?>

</body>

</html>
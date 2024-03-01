<?php

function urutan_angka($angka)
{
    $m = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($n = 1; $n <= $i; $n++) {
            echo $m++ . " ";
        }
        echo "<br>";
    }
}

echo urutan_angka(5);

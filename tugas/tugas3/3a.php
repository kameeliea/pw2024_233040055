<?php

// luas
$r = 10;
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungluaslingkaran($r)
{
    return 3.14 * $r * $r;
}

echo "jari-jari=" . $r . "cm.";
echo "<br>";
echo "Luas lingkaran=" . hitungluaslingkaran($r) . "cm²";

echo "<hr>";

//keliling
$r = 20;

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungkelilinglingkaran($r)
{
    return 3.14 * 2 * $r;
}
echo "Jari-jari=" . $r . "cm.";
echo "<br>";
echo "Keliling lingkarang=" . hitungkelilinglingkaran($r) . "cm²";

echo "<hr>";

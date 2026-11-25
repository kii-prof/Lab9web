
<?php

require_once __DIR__ . '/helpers.php';

echo formatRupiah(150000);
echo "<br>";

echo e('<script>alert("uji")</script>');
echo "<br>";

echo "Suhu: " . konversiCelciusKeFahrenheit(30) . " Fahrenheit";
echo "<br>";

echo "Predikat: " . tentukanStatusNilai(90);
echo "<br>";

echo "Total belanja: " . formatRupiah(hitungTotal(10000, 3));

?>

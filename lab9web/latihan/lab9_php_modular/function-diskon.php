
<?php

function hitungDiskon(float $harga, float $persen = 10): float
{
    return $harga * ($persen / 100);
}

echo hitungDiskon(200000);
echo "<br>";
echo hitungDiskon(200000, 15);

?>

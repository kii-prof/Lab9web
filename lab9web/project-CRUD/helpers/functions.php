<?php
function e($nilai): string
{
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}

function formatRupiah($angka): string
{
    return 'Rp ' . number_format((float) $angka, 0, ',', '.');
}

function is_select($var, $val): string
{
    return ($var == $val) ? 'selected="selected"' : '';
}

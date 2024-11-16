<?php
//? Operator Penugasan
//* Operator penugasan di PHP sama seperti bahasa pemrograman lain, yaitu dengan menggunakan karakter = (sama dengan).
//* Operator penugasan sudah sering kita gunakan, terutama ketika mengubah value sebuah variable.
//* Namun selain itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika.

//? Operator Penugasan Aritmatika
//* $a += $b        => $a = $a + $b
//* $a -= $b        => $a = $a - $b
//* $a *= $b        => $a = $a * $b
//* $a /= $b        => $a = $a / $b
//* $a %= $b        => $a = $a % $b
//* Contoh Code :

$total = 0;

$buah = 10000;
$ayam = 35000;
$jusJeruk = 5000;

//* Hasil penjumlahan dengan $buah
echo "<h1>Ini adalah hasil penjumlahan 0 + 10000</h1>";
echo $total += $buah;

echo "<br>";

//* Hasil penjumlahan dengan $ayam
echo "<h1>Ini adalah hasil penjumlahan 10000 + 35000</h1>";
echo $total += $ayam;

echo "<br>";

//* Hasil penjumlahan dengan $jusJeruk
echo "<h1>Ini adalah hasil penjumlahan 45000 + 5000</h1>";
echo $total += $jusJeruk;

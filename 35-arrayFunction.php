<?php
//? Array Function
//* Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data array.
//* Kalian bisa di website ini : https://www.php.net/manual/en/ref.array.php

//? Contoh Array Function
//* Function                   Keterangan
//* array_keys()            => Mengambil semua keys milik array.
//* array_values()          => Mengambil semua values milik array.
//* array_map()             => Mengubah semua data array dengan callback.
//* sort()                  => Mengurutkan array.
//* rsort()                 => Mengurutkan array secara terbalik.
//* shuffle()               => Mengubah posisi data di array secara random.

//? Kode : Array Function
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//* Contoh penggunaan array_map() :
echo "<h2>Penggunaan array_map() : </h2>";
var_dump(array_map(fn($value) => $value * 2, $data));
echo "<br><br>";

//* Contoh penggunaan sort() :
echo "<h2>Penggunaan sort() : </h2>";
sort($data);
var_dump($data);
echo "<br><br>";

//* Contoh penggunaan rsort() :
echo "<h2>Penggunaan rsort() : </h2>";
rsort($data);
var_dump($data);
echo "<hr>";

$person = [
    "first_name" => "Mochammad Fahmi",
    "last_name" => "Kurnia Sandi",
];

//* Contoh penggunaan array_keys() :
echo "<h2>Penggunaan array_keys() : </h2>";
var_dump(array_keys($person));
echo "<br><br>";

//* Contoh penggunaan array_values() :
echo "<h2>Penggunaan array_values() : </h2>";
var_dump(array_values($person));
echo "<br><br>";

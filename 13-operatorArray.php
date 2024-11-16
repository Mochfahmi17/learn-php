<?php
//? Operator Array
//* Operator Array Di PHP, Array memiliki operator khusus.
//* Mungkin terlihat mirip dengan operator-operator sebelumnya, tapi cara kerjanya sedikit berbada

//? Contoh Operator pada Array
//* Contoh             Nama                Keterangan
//* $a + $b         => Union            => menggabungkan array $a dan $b
//* $a == $b        => Equaility        => true jika $a dan $b memiliki key-value sama
//* $a === $b       => Identity         => true jika $a dan $b memiliki key-value sama dan posisi sama
//* $a != $b        => Inequality       => true jika $a dan $b tidak sama
//* $a <> $b        => Inequality       => true jika $a dan $b tidak sama
//* $a !== $b       => Nonidentity      => true jika $a dan $b tidak identik

//* Contoh code :
$first = [
    "first_name" => "Mochammad Fahmi"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Kurnia Sandi"
];

$full = $first + $last;
var_dump($full);

echo "<hr>";

//* Contoh code 2 :
$a = [
    "first_name" => "Budi",
    "last_name" => "Kurnia Sandi"
];

$b = [
    "last_name" => "Kurnia Sandi",
    "first_name" => "Budi"
];

var_dump($a == $b);
echo "<br>";
var_dump($a === $b);

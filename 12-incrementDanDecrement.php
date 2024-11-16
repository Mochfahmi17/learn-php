<?php
//? Increment dan Decrement
//* PHP mendukung gaya bahasa pemrograman C untuk menaikkan dan menurunkan data number sejumlah 1 angka.
//* Ini bisa mempersingkat kita ketika ingin menaikkan data.

//? Operator Increment dan Decrement
//* Contoh         Nama                    Efek
//* $a++        => Post increment       => Kembalikan $a lalu naikkan 1 angka.
//* Contoh code :
$a = 10;
$b = $a++;
var_dump($b); // output : 10.
// Illustrasi
// $b = $a;
// $a = $a + 1;

//* ++$a        => Pre increment        => Naikkan $a satu angka, lalu kembalikan $a.
//* Contoh code :
$a = 10;
$b = ++$a;
var_dump($b); // output : 11.
// Illustrasi
// $a = $a + 1;
// $b = $a

//* $a--        => Post increment       => Kembalikan $a lalu turunkan 1 angka.
$a = 10;
$b = $a--;
var_dump($b); // output : 10.
// Illustrasi
// $b = $a;
// $a = $a - 1;

//* --$a        => Pre increment        => Turunkan 1 angka, lalu kembalikan $a.
$a = 10;
$b = --$a;
var_dump($b); // output : 9.
// Illustrasi
// $a = $a - 1;
// $b = $a;
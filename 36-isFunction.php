<?php
//? Is Function
//* PHP memiliki banyak sekali function dengan prefix is_
//* Function-function ini rata-rata digunakan untuk mengecek tipe data dari sebuah data.
//* Kalian bisa di website ini : https://www.php.net/manual/en/ref.var.php

//? Contoh Is Function
//* Function                   Keterangan
//* is_string()             => Apakah tipe datanya string.
//* is_bool()               => Apakah tipe datanya boolean.
//* is_int()                => Apakah tipe datanya number integer.
//* is_float()              => Apakah tipe datanya number floating point.
//* is_array()              => Apakah tipe datanya array.
//* is_callable()           => Apakah tipe datanya callable atau function.
//* is_null()               => Apakah tipe datanya null.

//* Function is_ tersebut menghasilkan nilai boolean true atau false.

//? Kode : Is Function
$data = "sample";

//* Contoh penggunaan is_bool() :
echo "<h2>Penggunaan is_bool() : </h2>";
var_dump(is_bool($data));
echo "<br><br>";

//* Contoh penggunaan is_int() :
echo "<h2>Penggunaan is_int() : </h2>";
var_dump(is_int($data));
echo "<br><br>";

//* Contoh penggunaan is_float() :
echo "<h2>Penggunaan is_float() : </h2>";
var_dump(is_float($data));
echo "<br><br>";

//* Contoh penggunaan is_array() :
echo "<h2>Penggunaan is_array() : </h2>";
var_dump(is_array($data));
echo "<br><br>";

//* Contoh penggunaan is_string() :
echo "<h2>Penggunaan is_string() : </h2>";
var_dump(is_string($data));
echo "<br><br>";

//* Contoh penggunaan is_null() :
echo "<h2>Penggunaan is_null() : </h2>";
var_dump(is_null($data));
echo "<br><br>";

//* Contoh penggunaan is_callable() :
echo "<h2>Penggunaan is_callable() : </h2>";
var_dump(is_callable($data));
echo "<br><br>";

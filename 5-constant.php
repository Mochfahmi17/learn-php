<?php
//? Constant
//* Variable di PHP sifatnya mutable, artinya bisa dirubah.
//* Jika kita ingin membuat varible yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan di PHP.
//* Sebagai gantinya, terdapat fitur yang namanya constant.
//* Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan.
//* Untuk membuat constant kita bisa menggunakan function define().
//* Best practice pembuatan nama constant adalah menggunakan UPPER_CASE.
//* Contoh Code :

define("NAMA", "Mochammad Fahmi Kurnia Sandi");
define("UMUR_SAYA", 24);

echo "Nama saya adalah : ";
echo NAMA;
echo "<br>";
echo "Umur saya adalah : ";
echo UMUR_SAYA;

<?php
//? Dot Operator
//* Dot (titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain (bisa string atau tipe data lainnya).
//* Sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string, namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error . Oleh karena itu direkomendasikan menggunakan dot (titik) untuk menambahkan string dengan data lain.
//* Contoh code :

$nama = "Mochammad Fahmi Kurnia Sandi";

echo "Nama : " . $nama . PHP_EOL;
echo "<br>";
echo "Nilai : " . 100 . "\n";
echo "<hr>";

//? Konversi ke Number dan Sebaliknya
//* kadang kita sering melakukan konversi tipe data dari string ke number (int/float) atau sebaliknya.
//* Di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung (tipe data).
//* Tpe data untuk string adalah string, untuk number bisa menggunakan int untuk integer dan float untuk floating point.
//* Contoh code :

$valueString = (string)100;
var_dump($valueString);
echo "<br>";

$valueInteger = (int)"100";
var_dump($valueInteger);
echo "<br>";

$valueFloat = (float)"100.11";
var_dump($valueFloat);
echo "<hr>";

//? Mengakses Karakter
//* String di PHP seperti array karakter, dimana kita bisa mengakses data tipa karakternya menggunakan kurung siku.
//* Sama seperti array, index pertama dimulai dari 0.
//* Jika kita mengakses index melebihi karakter di string, maka akan terjadi error.
//* Contoh code : 

$nama = "Fahmi";

echo $nama[0];
echo "<br>";
echo $nama[1];
echo "<br>";
echo $nama[2];
echo "<br>";

//? Variable Parsing
//* Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variable.
//* Ini memudahkan ketika kita ingin meggabungkan string dengan variable.
//* Cara penggunaanyaadalah dengan menggunakan karakter $ lalu diikuti dengan nama variablenya.
//* Contoh code :

$aku = "Mochammad Fahmi Kurnia Sandi";
echo "Hello $aku, Semangat Belajar" . PHP_EOL;

//? Curly Brace
//* Kadang kita butuh  menggabungkan variable dengan string tanpa ada spasi. Hali ini akan menyulitkan jika anda menggunakan varibale parsing.
//* Untungnya di PHP bisa menambahkan kurung kurawal sebelum menggunakan variable.
//* Contoh code :
$var = "Andre";
echo "This is {$var}'s" . PHP_EOL;

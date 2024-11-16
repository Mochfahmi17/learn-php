<?php
//? Expression
//* Expression adalah bagian terpenting di PHP.
//* Di PHP, hampir semua kode yang kita tulis adalah sebuah expression.
//* Secara sederhana, expression adalah apapun yang memiliki nilai atau value.
//* Contoh code:

$a = 5;
$b = $a;

//! Penjelasan
//* $a = 5; Ketika kita menuliskan angka 5, maka tentu itu adalah nilai, oleh karena itu 5 tersebut adalah expression.
//* Lalu kita menulis kode $b = $a; $a bisa kita bilang adalah expression, karena $a memiliki value 5.

//? Contoh Expression yang Complex
//* Pada kode dibawah, getValue() adalah epression, karena getValue() bernilai angka 100.
//* Contoh code :

function getValue()
{
    return 100;
}

$value = getValue();

//? Statement
//* Statement bisa dibilang adalah kalimat lengkap dalam bahasa.
//* Sebuah statement berisikan execution komplit, biasanya diakhiri titik koma.
//* Contoh code :

$nama = "Mochammad Fahmi Kurnia Sandi"; // satu baris ini adalah sebuah statement
echo $nama; // ini juga sebuah statement
$date = new DateTime(); // ini juga sebuah statement

//? Block
//* Block adalah kumpulan statement yang terdiri dari nol atau lebih statement.
//* Block diawali dan diakhiri dengan kurung kurawal {}
//* Contoh code :

function runApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}
//! Penjelasan
//* code didalam kurung kurawal {} yang berisikan banyak atau sedikitnya statement itu disebut block.

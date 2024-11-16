<?php
//? Tipe data String
//* Tipe data string adalah tipe data yang representasi dari teks.
//* String bisa mengandung kosong atau banyak karakter.

//? Single Qoute
//* Untuk membuat String di PHP, kita bisa menggunakan Singel Quote ('').
//* Contoh Code :

echo 'Nama : ';
echo 'Mochammad Fahmi Kurnia Sandi';

echo "<br>";

//? Double Qoute
//* Selain Single Quote, kita juga bisa menggunakan double qoute. Salah satu kelebihan menggunakan Double Quote adalah, kita menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER \t untuk TAB, \" untuk Double Quote, dan lain-lain.
//* Contoh perbedaan Code :

// Single Quote
echo 'nama : ';
echo 'Mochammad Fahmi Kurnia Sandi';
echo "\n";

// Double Quote
echo "nama : ";
echo "Mochammad\t Fahmi\t Kurnia\t Sandi\n";

//? Multiline String
//* Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan itu sebenarnya kita bisa menggunakan \n sebagai ENTER.
//* Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc.

//? Heredoc
//* Heredoc adalah fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual melakukan enter, tab dan yang lain-lain secara manual.
//* Contoh Code :

echo "<br>";
echo <<<FAHMI
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
FAHMI;

//? Nowdoc
//* Nowdoc ini mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki kemampuan parsing seperti di Heredoc atau Double Quote. Masalah parsing akan kita bahas di materi Manipulasi String.
//* Contoh Code :

echo "<br>";
echo <<<'FAHMI'
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bsia quote" juga.
FAHMI;

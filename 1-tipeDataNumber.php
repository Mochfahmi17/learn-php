<?php
//? Tipe Data Number
//* Di PHP terdapat 2 jenus tipe data number
//* 1. tipe data int : Bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2).
//* 2. tipe data float : Bilangan pecahan.

//* Di PHP kita bisa menambahkan _ (garis bawah) di angka, ini hanya untuk agar mudah dibaca, saat dijalankan, _ (garis bawah) tersebut akan di ignore.

//* Untuk angka negatif, kita bisa menggunakan tanda - (minus) di depan angka.

//* Contoh penggunaan int :
echo "<h1>Ini adalah tipe data Integer</h1>";
echo "Decimal : ";
var_dump(1234);

echo "<br>";

echo "Octal :";
var_dump(0123);

echo "<br>";

echo "Hexadecimal : ";
var_dump(0x1A);

echo "<br>";

echo "Binary : ";
var_dump(0b111111);

echo "<br>";

echo "Underscore di number : ";
var_dump(1_234_567);

//* Contoh penggunaan float :
echo "<h1>Ini adalah tipe data Float</h1>";
echo "Floating point : ";
var_dump(1.234);

echo "<br>";

echo "<br>";

echo "Floating point dengan E notation plus (1.2 x 1000)";
var_dump(1.2e3);

echo "<br>";

echo "Floating point dengan E notation Minus (7 x 0.001)";
var_dump(7e-3);

echo "<br>";

echo "Underscore di Floating Point";
var_dump(1_234.567);
echo "<hr>";

//? Integer Overflow
//* Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32bit, dan 9223372036854775807 untuk sistem operasi 64bit.
//* Jika kita membuat number integer yang melebihi nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point.

//* Ini adalah contoh code nya :
echo "<h1>Ini adalah contoh Integer Overflow</h1>";
echo "<p>Integer Overflow adalah sebuah tipe data integer yang jika melebihi batas tertentu maka tipe data tersebut akan menjadi float, karena di dalam PHP integer itu memiliki sebuah batas nilai yaitu: untuk sistem operasi 32bit ia memiliki nilai batas : 2147483647. Sedangkan untuk sistem operasi 64bit ia memiliki nilai batasi : 9223372036854775807. Berikut contoh code nya :</p>";

echo "Integer Overflow 32 Bit : ";
var_dump(2147483647);

echo "<br>";

echo "Integer Overflow 64 Bit : ";
var_dump(9223372036854775807);

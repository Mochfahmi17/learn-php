<?php
//? String Function
//* Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi data string. Contohnya : strtoupper(), strtolower().
//* Sebenarnya banyak sekali function bawaan PHP yang bisa kita gunakan untuk memanipulasi string.
//* Kalian bisa cek website ini : https://www.php.net/manual/en/ref.strings.php

//? Contoh String Function
//* Function                   Keterangan
//* join() / implode()      => Menggabungkan array menjadi string.
//* explode()               => Memecah string menjadi array.
//* strtolower()            => Mengubah string menjadi lowercase.
//* strtoupper()            => Mengubah string menjadi uppercase.
//* substr()                => Mengambil sebagaian string.
//* trim()                  => Menghapus whitespace di depan dan belakang string.

//? Kode : String Function
//* Contoh penggunaan join() :
echo "Penggunaan join() :";
var_dump(join(",", [1, 2, 3, 4, 5]));
echo "<br>";

//* Contoh penggunaan explode() :
echo "Penggunaan explode() :";
var_dump(explode(" ", "Mochamad Fahmi Kurnia Sandi"));
echo "<br>";

//* Contoh penggunaan strtolower() :
echo "Penggunaan strtolower() :";
var_dump(strtolower("MOCHAMMAD FAHMI KURNIA SANDI"));
echo "<br>";

//* Contoh penggunaan strtoupper() :
echo "Penggunaan strtoupper() :";
var_dump(strtoupper("mochammad fahmi kurnia sandi"));
echo "<br>";

//* Contoh penggunaan trim() :
echo "Penggunaan trim() :";
var_dump(trim(" fahmi "));
echo "<br>";

//* Contoh penggunaan substr() :
echo "Penggunaan substr() :";
var_dump(substr("Mochammad Fahmi Kurnia Sandi", 0, 3));
echo "<br>";

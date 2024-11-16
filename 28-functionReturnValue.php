<?php
//? Function Return Value
//* Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai.
//* Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin di hasilkan.
//* kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu.

//? Kode : Function Return Value
//* Contoh 1 :
function sum(int $first, int $second)
{
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

echo "<br>";

$total = sum(20, 20);
var_dump($total);

echo "<hr>";

//* Contoh 2 :
function getFinalValue(int $value)
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

var_dump(getFinalValue(80));

echo "<hr>";

//? Return Type Declarations
//* Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya.
//* Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function.
//* Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan : diikuti tipe data kembaliannya.

//? Kode : Return Type Declarations
// function jum(int $angka1, int $angka2): int
// {
//     $hasil = $angka1 + $angka2;
//     return [];
// }

// $result = jum(10, 10);
// var_dump($result);
// echo "<br>";
//! Penjelasan
//* Ketika kode diatas dijalankan maka akan error, karena kode tersebut mendeklarasikan tipe data return sebagai integer maka tipe data yang harus dikembalikan adalah tipe data int, dalam contoh kode diatas kita memberikan return [] (array) maka akan terjadi error karena tidak sesuai tipe datanya.

function yuhu(int $nilai): string
{
    if ($nilai >= 80) {
        return "A";
    } else if ($nilai >= 70) {
        return "B";
    } else if ($nilai >= 60) {
        return "C";
    } else if ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$total = yuhu(10);
var_dump($total);

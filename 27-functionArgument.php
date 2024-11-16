<?php
//? Function Argumen
//* Kita bisa mengirim informasi ke function yang kita panggil.
//* Untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter di function yang sudah kita buat.
//* Cara membuat argument sama seperti cara membuat variabel.
//* Argument ditempatkan didalam kurung () di deklarasi function.
//* Argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan titik koma.

//? Kode : Function Argument
function sayHello($nama, $umur)
{
    echo "Halo nama saya adalah $nama, saya berumur $umur tahun.<br>" . PHP_EOL;
}

sayHello("Fahmi", 24);

//? Default Argument
//* PHP mendukung default argument value.
//* Fitur ini memungkinkan jika ketika kita memanggil function tapi tidak memasukkan parameternya, kita bisa menentukan data defaultnya apa.

//? Kode : Default Argument Value
function sayHalo($name = "Anonymous")
{
    echo "Halo $name, apa kabar ?" . PHP_EOL;
}

sayHalo();

//? Kesalahan Default Arggument Value
//* Default argument value bisa disimpan argument manapun.
//* Namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter awal, maka itu kurang berguna.

//? Kode : Kesalahan Default Argument Value
// function sayMyName($first_name = "Anonymous", $last_name)
// {
//     echo "Hello $first_name $last_name <br>" . PHP_EOL;
// }

// sayMyName("Kurniawan");
//! Penjelasan
//* Kode tersebut error karena kita hanya mengirimkan 1 argument saja yaitu merajuk ke $first_name. Kita tidak bisa langsung merajuk ke $last_name

//? Type Declaration
//* Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis.
//* Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu.
//* Untungnya di PHP, kita bisa menambahkan tipe data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut.
//* Jika tipe data value tidak sesuai, maka akan terjadi error.
//* Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe int, tapi kita mengirim string, maka PHP akan otomatis mengkonversi string tersebut menjadi int.

//? Valid type
//* Type                       Keterangan
//* Class / Interface       => Parameter harus tipe Class / Interface
//* Self                    => Parameter harus sama dengan class dimana function ini dibuat.
//* Array                   => Parameter harus array
//* Callable                => Parameter harus callable
//* bool                    => Parameter harus boolean
//* float                   => Parameter harus floating point
//* int                     => Parameter harus integer number
//* string                  => Parameter harus string
//* interable               => Parameter harus array atau tipe Traversable
//* object                  => Parameter harus object

//? Kode : Type Declaration
// function sum(int $first, int $last)
// {
//     $total = $first + $last;
//     echo "Total $first + $last = $total <br>" . PHP_EOL;
// }
// sum("100", "100");
// sum(100, 100);
// sum(true, false);
// sum([], []);
//! Penjelasan
//* Semua function berhasil dijalankan kecuali sum([],[]); Karena array tida bisa di konversikan menjadi integer maka dari itu ketika dijalankan akan terjadi error.

//? Variable-length Argument List
//* Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value.
//* Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya.
//* Variable-length argument list hanya bisa dilakukan di argument posisi terakhir.
//* Untuk membuat variable-length argument list, kita bisa menggunakan tanda ... (titik tiga kali) sebelum nama argument.

//? Kode : Variable-length Argument List
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total <br>" . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40, 50);
sumAll(...[10, 20, 30, 40, 50]);

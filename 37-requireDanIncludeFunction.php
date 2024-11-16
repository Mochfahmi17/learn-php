<?php
//? Require dan Include
//* Saat membuat aplikasi, ada baiknya tidak dibuat dalam satu file.
//* Lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk di satu file.
//* PHP memiliki function require dan include yang bisa kita gunakan untuk mengambil file php lain.
//* Lantas apa bedanya require dan include ?
//* Pada require, jika file yang kita ambil tidak ada, maka akan terjadi error dan program berhenti.
//* Pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan.

//? Kode : Include
// require("Lib/MyFunction.php");

// echo sayHello("Mochammad Fahmi", "Kurnia sandi");

//? Posisi Require dan Include
//* Kode program PHP akan dibaca dari atas ke bawah, oleh karena itu pastikan posisi require dan include diletakkan paling atas setelah tag php.
//* Misal jika sampai kita salah menempatkan posisi require dan include, bisa jadi kita malah memanggil function yang belum ada.

//? require_once dan include_once
//* Function require dan include akan selalu mengambil file yang kita inginkan.
//* Jika kita beberapa kali menggunakan require dan include di file yang sama, maka file tersebut akan berkali-kali pula kita ambil.
//* Hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi function, sehingga jika diambil berkali-kali akan menyebabkan error redeclare function.
//* Untungnya di PHP terdapat function require_once dan include_once, function ini bisa mendeteksi jika kita sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi.

//? Kode : Include berkali-kali
// include("Lib/MyFunction.php");
// include("Lib/MyFunction.php");

// echo sayHello("Mochammad Fahmi", "Kurnia Sandi");
//! Penjelasan
//* Ketika menjalankan kode ini, akan menghasilkan error yang bertuliksan redeclare sayHello()

//? Kode : include_once()
include_once("Lib/MyFunction.php");
include_once("Lib/MyFunction.php");

echo sayHello("Mochammad fahmi", "Kurnia Sandi");
//! Penjelasan
//* Ketika menjalankan kode ini, kode ini akan berjalan dan menampilkan "Hello Mochammad fahmi Kurnia Sandi". Karena ketika kita menjalankan include_once() yang pertama itu akan meload file MyFunction.php dan ketika kita menuliskan include_once() untuk yang kedua kalinya, maka file tersebut tidak akan diload karena sudah pernah di load sebelumnya.

//* Note : Gunakan require_once() atau include_once() jika tidak ingin salah ketika men include atau me require sebuah file. Agar memastikan file tersebut cuman sekali di load.

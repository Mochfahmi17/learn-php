<?php
//? Data NULL
//* Nilai NULL merepresentasikan sebuah variable tanpa nilai.
//* Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa menggunakan NULL untuk mengkosongkan variable tersebut.
//* Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive).
//* Contoh Code :

$nama = "Mochammad Fahmi Kurnia Sandi";
$nama = NULL;

$umur = null;

echo "Nama Saya adalah : ";
echo $nama;
echo "<br>";
echo "Umur saya adalah : ";
echo $umur;
echo "<hr>";

//? Mengecek Apakah Data tersebut NULL atau tidak
//* Kadang kita ingin tahu apakah data bernilai null atau tidak.
//* Untuk mengecek apakah sebuah data bernilai null, kita bisa menggunakan function yang bernama is_null($variable) yang menghasilkan nilai boolean. Jika bernilai 1 maka akan menghasilkan true jika bernilai 0 maka akan menghasilkan false.
//* Contoh Code :

$alamat = "Surabaya";
$email = null;

echo "Apakah data bernilai null ? ";
var_dump(is_null($email));
echo "<hr>";

//? Menghapus Variable
//* Selain mengubah menjadi NULL, di PHP juga kita bisa menghapus sebuah variable, caranya dengan menggunakan function unset($variable).
//* Namun hati-hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut, bahkan function is_null($variable) pun akan menjadi error jika mengakses variable tersebut.
//* Agar lebih aman, kita bisa menggunakan function isset($variable) untuk mnegecek apakah sebuah variable ada dan nilainya tidak NULL.
//* Contoh Code :

// Menggunakan unset
$nama_teman = "Ilham";
unset($nama_teman);

echo $nama_teman;

// Menggunakan isset
$nama_teman = "Erik";
var_dump(isset($nama_teman));

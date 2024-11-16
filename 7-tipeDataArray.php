<?php
//? Tipe Data Array
//* Array adalah tipe data yang berisikan kosong atau banyak data.
//* Array di PHP bisa berisikan data dengan jenis berbeda-beda.
//* Array di PHP memiliki panjang dinamis, yang artinya kita bisa menambah data ke Array sebanyak-banyaknya, tidak dibatasi kapasitasnya.

//? Cara Kerja Array
//* Array memiliki index yang dimulai dari 0.
//* Contoh Code :
// Cara lama
$value = array(1, 2, 3, 4);
var_dump($value);

echo "<br>";

// Cara baru
$nama = ["Mochammad fahmi", "Ilham Kurniawan", "Jumiati"];
var_dump($nama);
echo "<hr>";

//? Operasi Array
//* $array[index]           => Untuk mengakses data di array pada nomor index.
//* Contoh :
$names = ["Siswanto", "Parto", "Budi"];
var_dump($nama[0]);
echo "<br>";

//* $array[index] = value   => Untuk mengubah data di array pada nomor index dengan value baru.
//* Contoh :
$benda = ["Pensil", "Apel", "Penggaris"];
$benda[1] = "Bulpoin";
echo "Nama benda : ";
var_dump($benda);
echo "<br>";

//* $array[] = value        => Untuk menambah data di array pada posisi paling belakang.
//* Contoh :
$buah = ["Apel", "Pisang", "Semangka"];
$buah[] = "Jeruk";
echo "Nama buah : ";
var_dump($buah);
echo "<br>";

//* unset($array[index])    => Untuk menghapus data di array, index otomatis hilang dari array.
//* Contoh :
$kota = ["Surabaya", "Jakarta", "Semarang"];
unset($kota[2]);
var_dump($kota);
echo "<br>";

//* count($array)           => Untuk mengambil total data di array.
//* Contoh :
$hewan = ["Harimau", "Buaya", "Singa"];
var_dump(count($hewan));
echo "<hr>";

//? Array Sebagai Map
//* Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi antara key dan value.
//* Namun di PHP, Map bisa dibuat menggunakan Array.
//* Secara default Array akan menggunakan index(number) sebagai key dan valuenya kita bisa bebas memasukkan data kedalam Array.
//* Namun jika ingin, kita juga bisa mengubah index nya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string misalnya.
//* Hal tersebut terlihat seperti Map di bahasa pemrograman lain.
//* Contoh Code :
// Cara lama
$fahmi = array(
    "id" => "Fahmi",
    "nama" => "Mochammad Fahmi Kurnia Sandi",
    "age" => 24
);
var_dump($fahmi);
echo "<br>";

// Cara baru
$budi = [
    "id" => "budi",
    "nama" => "Budi Mulyono",
    "age" => 30
];
var_dump($budi["nama"]);
echo "<br>";

//? Array di dalam Array
//* Seperti dijelaskan diawal, Array di PHP bisa berisikan data apapun.
//* Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan.
//* Contoh code :

$ilham = [
    "id" => "ilham",
    "nama" => "Mochammad Fahmi Kurnia Sandi",
    "age" => 23,
    "alamat" => [
        "kota" => "Surabaya",
        "country" => "Indonesia"
    ]
];

var_dump($ilham["alamat"]["kota"]);

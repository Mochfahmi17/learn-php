<?php
//? For Each
//* Kadang kita biasa mengakses data array menggunakan perulangan.
//* Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat.
//* Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di Array secara otomatis.

//? Kode : Tanpa For Each
$nama = ["Fahmi", "Kurnia", "Sandi"];

for ($i = 0; $i < count($nama); $i++) {
    echo "Hello $nama[$i] <br>" . PHP_EOL;
}

echo "<hr>";

//? Kode : For Each Loop
$names = ["Jamal", "Udin", "Budi"];

foreach ($names as $name) {
    echo "Nama saya adalah $name <br>" . PHP_EOL;
}
echo "<hr>";

//? Kode : For Each dengan Key
$person =  [
    "nama" => "Mochammad Fahmi Kurnia Sandi",
    "umur" => 24,
    "email" => "mochammadfahmiks@gmail.com"
];

foreach ($person as $key => $value) {
    echo "$key : $value <br>";
}

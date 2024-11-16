<?php
//? Variable
//* Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program kita selanjutnya.
//* Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data.
//* Untuk membuat variabel kita bisa menggunakan tanda $(dollar) diikuti dengan nama varibel nya.
//* Penamaan variabel tidak boleh mengandung spasi.
//* Contoh code :

$nama = "Mochammad Fahmi Kurnia Sandi";
$umur = 24;

echo "Nama : ";
echo $nama;

echo "<br>";

echo "Umur : ";
echo $umur;
echo "<hr>";

//? Variable Variables
//* PHP memiliki kemampuan Variable Variables, yaitu membuat variable dari string value variable.
//* Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan.
//* Untuk membuat varible dari value variable kita bisa menggunakana $$ diikut dengan nama variable nya.
//* Contoh Code :

$nama = "fahmi";
$$nama = "keren";

echo "\$nama = ";
echo $nama;

echo "<br>";

echo "\$fahmi = ";
echo $fahmi;
echo "<br>";

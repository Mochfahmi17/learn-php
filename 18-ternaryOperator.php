<?php
//? Ternary Operator
//* Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika kondisinya benar/true kita ingin memberi nilai terhadap variable dengan nilai X dan jika kondisinya bernilai salah/false dengan nilai Y.
//* Penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator.
//* Ternary operator menggunakan kata kunci ? dan :

//* Contoh code :
$gender = "Wanita";
$hi = null;
$hi = $gender == "Pria" ? "Halo tampan" : "Halo cantik";
echo $hi;

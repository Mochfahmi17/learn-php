<?php
//? For loop
//* For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan.
//* Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi.

//? Syntax Perulangan For
//* for(init statement; kondisi; post statement) {
//* // block perulangan
//* }

//* Init statement akan dieksekusi hanya sekali di awal sebelum perulangan.
//* Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti.
//* Post statement akan dieksekusi setiap kali diakhir perulangan.
//* Init statement, Kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi, berarti kondisi selalu bernilai true.

//? Kode : Perulangan Tanpa Henti
// for (;;) {
//     echo "Hello for loop<br>" . PHP_EOL;
// }
//! Penjelasan
//* Saat menjalankan kode diatas, kode tersebut akan mencetak "Hello for loop" tanpa henti karena kita tidak mengisi 3 kondisi yaitu Init statement, kondisi dan post statement, yang membuat kondisinya bernilai true.

//? Kode : Perulangan Dengan Kondisi
// $counter = 1;
// for (; $counter <= 10;) {
//     echo "Hello for loop ke-$counter <br>" . PHP_EOL;
//     $counter++;
// }
//! Penjelasan
//* Saat menjalankan kode diatas, kode tersebut akan mencetak "Hello for loop" sebanyak 10 kali, karena kita menuliskan kondisi yang dimana $kondisi lebih kecil sama dengan 10; yang artinya kode ini akan melooping sebanyak 10 kali. jika $counter bernilai 11 maka kondisi tersebut akan false dan perulangan tidak dijalankan.

//? Kode : Perulangan Dengan Init Statement
// for ($counter = 1; $counter <= 10;) {
//     echo "Hello for loop ke-$counter <br>" . PHP_EOL;
//     $counter++;
// }
//! Penjelasan
//* Saat kita menjalankan kode diatas, kode tersebut akan mencetak "Hello for loop" sebanyak 10 kali, namun dalam kasus ini penulisannya berbeda yaitu kita menuliskan init kedalam kondisi for nya.

//? Kode : Perulangan Dengan Post Statement
// for ($counter = 1; $counter <= 10; $counter++) {
//     echo "Hello for loop ke-$counter <br>" . PHP_EOL;
// }
//! Penjelasan
//* Saat kita menjalankan kode diatas, kode tersebut akan mencetak "Hello for loop" sebanyak 10 kali, namun kali ini kita menuliskan init statement, kondisi dan post statement di dalam kondisi for nya. Perlu diketahui bahwa penulisan seperti ini lebih di rekomendasikan karena penulisan yang seperti ini akan membuat penulisan kode kita akan sedikit lebih ringkas.

//? Kode : Syntax Alternatif For Loop
for ($counter = 1; $counter <= 10; $counter++) :
    echo "Hello for loop ke-$counter <br>" . PHP_EOL;
endfor;

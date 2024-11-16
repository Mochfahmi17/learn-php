<?php
//? Do While Loop
//* Do while loop adalah perulangan yang mirip dengan while.
//* Perbedaannya hanya pada pengecekan kondisi.
//* Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan.
//* Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true.

//? Kode : Do While Loop
$counter = 100;

do {
    echo "Hello do while loop : $counter <br>" . PHP_EOL;
    $counter++;
} while ($counter <= 10);
//! Penjelasan
//* Output tersebut akan menampilkan "Hello do while loop 100" sebanyak 1 kali karena do while loop itu akan menjalankan sekali jika kondisinya bernilai false. Sedangkan while loop tidak akan tampil meski kondisinya bernilai false.
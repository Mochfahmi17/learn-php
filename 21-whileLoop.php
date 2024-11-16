<?php
//? While Loop
//* While loop adalah versi perulangan yang lebih sederhana dibanding for loop.
//* Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement. Namun hanya ada kondisinya saja. Jadi selama kondisi nya bernilai true maka perulangan while akan dieksekusi.

//? Kode : While Loop
$counter = 1;
while ($counter <= 10) {
    echo "Hello While loop : $counter <br>" . PHP_EOL;
    $counter++;
}
echo "<hr>";

//? Kode : Syntax Alternative While Loop
$angka = 1;
while ($angka <= 10) :
    echo "Hello while loop : $angka <br>" . PHP_EOL;
    $angka++;
endwhile;

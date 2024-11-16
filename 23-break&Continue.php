<?php
//? Break & Continue
//* Pada Switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch.
//* Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
//* Namun berbedan dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya.

//? Kode : Break
$counter = 1;
while (true) {
    echo "Hello break : $counter <br>" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

echo "<hr>";

//? Kode : Continue
for ($nilai = 1; $nilai <= 100; $nilai++) {
    if ($nilai % 2 == 0) {
        continue;
    }
    echo "Hello Continue $nilai <br>" . PHP_EOL;
}

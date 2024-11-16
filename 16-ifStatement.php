<?php
//? If Statement
//* Dalam PHP, if adalah salah satu kata kunci yang digunakan untuk percabangan.
//* Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi.
//* Hampir di semua bahasa pemrograman mendukung if expression.

//? Syntax If Statement
//* if (Expression)
//*     Statement;

//* if (Expression) {
//*     Statement1;
//*     Statement2;
//* }

//* Contoh code :
$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Anda Lulus" . PHP_EOL;
} // output akan kosong. Karena kondisi tersebut harus terpenuhi atau true.
echo "<hr>";

//? Else Statement
//* Block if dieksekusi ketika kondisi if bernilai true.
//* Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false.
//* Hal ini bisa dilakukan menggunakan else statement.

//? Syntax Else Statement
//* if (Expression)
//*     Statement;
//* else
//*     Statement;

//* if (Expression) {
//*     statement1;
//*     statement2;
//* } else {
//*     statement;
//* }

//* Contoh code :
$a = 70;
$b = 90;

if ($a >= 75 && $b >= 75) {
    echo "Anda Lulus" . PHP_EOL;
} else {
    echo "Anda Tidak Lulus" . PHP_EOL;
}

echo "<hr>";

//? Else If Statement
//* Kadang didalam if, kita butuh membuat beberapa kondisi.
//* Kasus seperti ini, di PHP kita bisa menggunakan Else If statement.
//* Else if di PHP bisa lebih dari satu.
//* Kode Else if di PHP bisa menggunakan "else if" atau "elseif" (digabung).

//? Syntax Else If Statement
//* if (Expression)
//*     Statement;
//* elseif (Expression)
//*     Statement;
//* else
//*     Statement;

//* if (Expression) {
//*     statement1;
//*     statement2;
//* } else if (Expression) {
//*     statement;
//* } else {
//*     statement;
//* }

//* Contoh code :
$nilaiAndi = 70;
$absenAndi = 90;

if ($nilaiAndi >= 80 && $absenAndi >= 80) {
    echo "Nilai anda A" . PHP_EOL;
} else if ($nilaiAndi >= 70 && $absenAndi >= 70) {
    echo "Nilai anda B" . PHP_EOL;
} else if ($nilaiAndi >= 60 && $absenAndi >= 60) {
    echo "Nilai anda C" . PHP_EOL;
} else if ($nilaiAndi >= 50 && $absenAndi >= 50) {
    echo "Nilai anda D" . PHP_EOL;
} else {
    echo "Nilai anda E. maaf, anda tidak lulus" . PHP_EOL;
}

echo "<hr>";

//? Syntax Alternatif
//* Selain menggunakan {} (kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan if, yaitu dengan menggunakan : (titik dua).
//* Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif diakhir statement.

//? Kode : If Statement Dengan Colon
$nilaiBudi = 80;
$absenBudi = 90;

if ($nilaiBudi >= 80 && $absenBudi >= 80) :
    echo "Nilai anda A" . PHP_EOL;
elseif ($nilaiBudi >= 70 && $absenBudi >= 70) :
    echo "Nilai anda B" . PHP_EOL;
elseif ($nilaiBudi >= 60 && $absenBudi >= 60) :
    echo "Nilai anda C" . PHP_EOL;
elseif ($nilaiBudi >= 50 && $absenBudi >= 50) :
    echo "Nilai anda D" . PHP_EOL;
else :
    echo "Nilai anda E. maaf, anda tidak lulus" . PHP_EOL;
endif;

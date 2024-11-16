<?php
//? Switch Statement
//* Kadang kita hanya butuh menggunakan kondisi sederhana di if statement, seperti hanya menggunakan perbandingan ==
//* Switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya.
//* Kondisi di switch statement hanya untuk perbandingan ==

//? Kode : Switch Statement
$nilai = "B";
switch ($nilai) {
    case 'A':
        echo "Anda lulus dengan sangat baik." . PHP_EOL;
        break;
    case 'B':
    case 'C';
        echo "Anda lulus." . PHP_EOL;
        break;
    case 'E':
        echo "Anda tidak lulus." . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
        break;
}

echo "<hr>";

//? syntax Alternatif
//* Sama seperti if statement, switch statement juga bisa tanpa menggunakan {} (kurung kurawal).
//* Namun diakhir switch statement, kita harus menambahkan kata kunci endswitch.
//* Contoh code :
$nilaiJoko = "A";
switch ($nilaiJoko):
    case 'A':
        echo "Anda lulus dengan sangat baik." . PHP_EOL;
        break;
    case 'B':
    case 'C';
        echo "Anda lulus." . PHP_EOL;
        break;
    case 'E':
        echo "Anda tidak lulus." . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
        break;
endswitch;

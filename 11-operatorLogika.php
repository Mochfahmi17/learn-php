<?php
//? Operator Logika
//* Operator Logika adalah operator untuk membandingkan dua nilai boolean.
//* Hasil dari Operator Logika adalah boolean lagi. berikut Operator Logika di dalam bahasa pemrograman :

//* Operator           Nama        Hasil
//* $a && $b        => And      => True jika $a dan $b keduanya true.
//* Contoh code :
var_dump(true && true); // output : true. Karena keduanya kondisinya harus bernilai true.

//* $a and $b       => And      => True jika $a dan $b keduanya true.
//* Contoh code :
var_dump(true and true); // output : true. Karena keduanya kondisinya harus bernilai true.

//* $a || $b        => Or       => True jika $a dan $b salah satu atau keduanya true.
//* Contoh code :
var_dump(true || false); // output : true. Karena jika salah satu bernilai true atau keduanya bernilai true, maka akan dianggap true.

//* $a or $b        => Or       => True jika $a dan $b salah satu atau keduanya true.
//* Contoh code :
var_dump(true || false); // output : true. Karena jika salah satu bernilai true atau keduanya bernilai true, maka akan dianggap true.

//* ! $a            => Not      => True jika $a bernilai false.
//* Contoh code :
var_dump(!false); // output : true. Karena Jika kondisi tersebut bernilai false maka akan menghasilkan nilai true begitupun sebaliknya.

//* $a xor $b       => Xor      => True jika $a dan $b salah satu true, tapi tidak keduanya.
var_dump(true xor false); // output : true. Karena jika salah satu kondisinya bernilai true maka akan menghasilkan nilai true tapi jika kedua kondisinya bernilai true makan akan menghasilkan nilai false.

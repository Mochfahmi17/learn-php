<?php
//? Operator Perbandingan
//* Operator Perbandingan, seperti namanya, digunakan untuk membandingkan dua buah value.
//* Hasil dari operator perbandingan adalah boolean, true jika perbandingannya benar, false jika perbandingannya salah. berikut operator perbandingan dalam bahasa pemorgraman :

//* Operator               Nama                            Keterangan
//* $a == $b            => Sama dengan                  => true jika $a sama dengan $b setelah dilakukan    konversi tipe data
//* Contoh code :
var_dump("10" == 10); // output : true. Karena memiliki value yang sama walaupun tipe data berbeda.

//* $a === $b           => Identitas                    => true jika $a sama dengan $b dan memiliki tipe data yang sama juga
//* Contoh code :
var_dump("10" === 10); // output : false. Karena tipe data yang berbeda.

//* $a != $b            => Tidak sama dengan            => true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
//* Contoh code :
var_dump("10" != 20); // output : true. Karena memiliki value yang berbeda walaupun tipe data berbeda.

//* $a <> $b            => Tidak sama dengan            => true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data.
//* Contoh code :
var_dump("10" <> 20); // output : true. Karena memiliki value yang berbeda walaupun tipe data berbeda.

//* $a !== $b           => Tidak identitas              => true jika $a tidak sama dengan $b atau tidak sama tipe data.
//* Contoh code :
var_dump("10" !== 20); // output : true. Karena memiliki value yang berbeda atau tipe data berbeda.

//* $a < $b             => Kurang dari                  => true jika $a kurang dari $b
//* Contoh code :
var_dump(10 < 20); // output : true. Karena 10 lebih kecil dari 20.

//* $a <= $b            => Kurang dari atau sama dengan => true jika $a kurang dari atau sama dengan $b
//* Contoh code :
var_dump(10 <= 10); // output : true. Karena 10 lebih kecil dari 20 atau memiliki value yang sama dengan 10.

//* $a > $b             => Lebih dari                   => true jika $a lebih besar dari $b
//* Contoh code :
var_dump(10 > 5); // output : true. Karena 10 lebih besar dari 5.

//* $a >= $b            => Lebih dari atau sama dengan  => true jika $a lebih besar dari atau sama dengan $b
//* Contoh code :
var_dump(10 >= 10); // output : true. Karena 10 lebih besar dari 5 atau memiliki value yang sama dengan 10.
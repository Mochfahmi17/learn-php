<?php
//? Variable Scope
//* Di PHP, kita bisa memuat variable dimanapun yang kita mau
//* Scope variable adalah dibagian mana saja sebuah variable bisa diakses.
//* PHP memiliki tiga jenis variable scope :
//*     1. Global
//*     2. Local
//*     3. Static

//? Variable GLobal Scope
//* Variable yang dibuat diluar function memiliki scope global.
//* Variable di scope global hanya bisa diakses dari luar function.
//* Artinya didalam function, kita tidak bisa mengakses variable di global scope.

//? Kode : Variable Global Scope
// $name = "Mochammad Fahmi Kurnia Sandi"; // ini adalah variable global scope

// function sayName()
// {
//     echo $name; // tidak mengenali apa itu $name. Karena variable tersebut tidak bisa mengakses variable yang ada di luar function itu sendiri.
// }

// sayName(); // output : error. Undefined $name.

//! Penjelasan
//* Ketika menjalankan kode tersebut, browser tidak mengenali $name, karena function itu tidak bisa mengakses variable global dan hanya mengenali variable yang ada di dalam function itu sendiri.

// Penulisan kode yang benar
// $name = "Mochammad Fahmi Kurnia Sandi <br>"; //ini variable global scope.

// function sayName()
// {
//     echo $name; // menampilkan variable local scope namun, variable local scope tersebut tidak didefinisikan.
// }

// sayName();
// echo $name; // menampilkan variable global scope

//? Variable Local Scope
//* Variable yang dibuat didalam function memiliki scope local.
//* Variable di scope local hanya bisa diakses dari dalam function itu sendiri.
//* Artinya variable terebut tidak bisa diakses dari luar function ataupun dari function lain.

//? Kode : Variable Local Scope
// Penulisan kode yang salah
// function createName()
// {
//     $nama = "Mochammad Fahmi Kurnia Sandi"; // ini adalah variable local scope
// }

// createName();
// echo $nama;

//! Penjelasan
//* Ini alah menghasilkan error karena kita menampilkan/echo diluar function untuk $nama yang variabel tersebut mengacu ke variable global bukan variable local yang ada di dalam function tersebut.

// Penulisan kode yang benar
// function creaateName()
// {
//     $nama = "Mochammad Fahmi Kurnia Sandi"; // ini adalah variable local scope
//     echo $nama;
// }

// creaateName();

//? Global Keyword
//* Namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global.
//* dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada di global scope dari dalam function.

//? Kode : Global Keyword
// $name = "Muhammad Iqbal";

// function sayName()
// {
//     global $name; // ini adalah global keyword
//     echo "Hello, $name";
// }

// sayName();

//! Penjelasan
//* dengan memberikan keyword global, maka kita bisa mengakses variabel global atau variabel yang berada di luar function.

//? $GLOBAL Variable
//* Selain menggunakan global keyword, setiap variable yang dibuat di global scope, secara otomatis akan disimpan didalam array $GLOBAL oleh PHP.
//* Jadi kita bisa menggunakan $GLOBAL variable dengan key nama variable nya dari dalam function jika ingin mengakses global variable.
//* $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun.

//? Melihat Isi Dari $GLOBAL variable
var_dump($GLOBALS);

//! Penjelasan
//* Jadi $GLOBALS adalah sebuah variable superglobal yang isinya terdapat sebuah array yang berisi variable global scope, variable local scope dan variable superglobal lainnya seperti $_GET, $_POST $_FILES, $_COOKIE.
//* Jadi kita bisa mengganti global keyword dengan $GLOBALS["name"];.

//? Kode : $GLOBAL Variable
$name = "<br>Rendy Alfiansyah";

function sayName()
{
    echo $GLOBALS['name'];
}

sayName();

//? Static Scope
//* Secara default local variable itu siklus hidupnya hanya sebatas function nya dieksekusi.
//* Jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai.
//* PHP memiliki scope bernama static.
//* Static scope hanya bisa di set ke local variable.
//* Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi.
//* Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya.

//? Kode : Static Scope
function increment()
{
    static $counter = 1; // static scope
    echo "<br>Counter : $counter";
    $counter++;
}

increment();
increment();
increment();
// Output : "Counter : 1" "Counter : 2" "Counter : 3"

//! Penjelasan
//* Jika kita tidak menuliskan static, maka out tersebut adalah : "Counter : 1" "Counter : 1" "Counter : 1" walaupun sudah di increment menggunakan increment ($counter++). Karena setelah function tersebut selesai di eksekusi, maka $counter akan hilang. Sedangkan menggunakan keyword static maka $counter tidak akan hilang bahkan setelah function dieksekusi beberapa kali.

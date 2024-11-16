<?php
//? Anonymous Function
//* Anonymous Function adalah function tanpa nama, di PHP disebut juga dengan closure.
//* Anonymous Function biasanya digunakan sebagai argument atau sebagai value di variable.
//* Anonymous Function membuat kita bisa mengirim function sebagai argument di function lainnya.

//? Kode : Anonymous Function
$sayHello = function (string $name) {
    echo "Hello $name <br>" . PHP_EOL;
};

$sayHello("Fahmi");

//? Kode : Anonymous Function Sebagai Argument
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName <hr>" . PHP_EOL;
}

$filterFunction = function (string $name) {
    return strtoupper($name);
};

sayGoodBye("Fahmi", $filterFunction);

//? Mengakses variable di Luar Closure
//* Secara default, anonymous function tidak bisa mengakses variable yang terdapat diluar function.
//* Jika kita ingin menggunakan variable yang teradapat diluar anonymous function, kita perlu secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita gunakan.

//? Kode : Mengakses Variable Luar
$firstName = "Mochammad Fahmi";
$lastName = "Kurnia Sandi";

$sayHelloFahmi = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName <br>" . PHP_EOL;
};

$sayHelloFahmi();

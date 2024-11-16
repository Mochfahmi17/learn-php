<?php
//? Callback Function
//* Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan di argument.
//* Hal ini sebenarnya sudah kita lakukan di materi Variable Function dan Anonymous Function.
//* Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable.
//* Dan untuk memanggil callback function tersebut, kita bisa menggunakan function call_user_func(callable, arguments).

//? Kode : Callback Function
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName <br>" . PHP_EOL;
}
//! Penjelasan
//* Gunakan tipe data callable untuk menandakan bahwa kia ingin memasukkan sebuah function kedalam parameter.

sayHello("Fahmi", function ($name) {
    return strtoupper($name);
});
sayHello("Fahmi", fn($name) => strtoupper($name));
sayHello("Fahmi", "strtoupper");
sayHello("Fahmi", "strtolower");

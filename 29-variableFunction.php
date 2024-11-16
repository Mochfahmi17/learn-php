<?php
//? Variable Function
//* PHP mendukung konsep yang bernama variable function.
//* Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable.
//* Untuk menggunakan variable function, kita bisa secara langsung memanggil $namavariable(), jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument).

//? Kode : Variable Function
function foo()
{
    echo "Foo <br>" . PHP_EOL;
}

function bar()
{
    echo "Bar <br>" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

//? Kode : Variable Function
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName <br>" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "sample $name";
}

sayHello("Fahmi", "sampleFunction");
sayHello("Fahmi", "strtoupper");
sayHello("Fahmi", "strtolower");

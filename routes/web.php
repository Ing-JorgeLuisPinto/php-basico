<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return "Jorge Luis Pinto";
});

Route::get('/php-basico', function () {

    echo "<h1 style= 'color:red;'> Aprendiendo PHP </h1>";

    $name = "Jorge Pinto";
    $height = 1.80;
    $isLogin = true;
    $age = 18;

    echo "<h4> ", $name . "</h4>";
    echo "<p> ", $name . "</p>";

    echo "<br><br><br>************************** ESTRUCTURAS DE CONTROL ****************************<br><br><br>";
    $message = "Soy $name, tengo $age años.". valedateAge($age);
    $message .= $isLogin ? "Estoy logueado" : "No estoy logueado";
    echo $message;
    echo "<br><br><br>************************** ESTRUCTURAS DE CONTROL ****************************<br><br><br>";

    $pc = [
        "name" => "pc Game core9",
        "price" => 6000,
        "marca" => "Lenovo"
    ];
    $teclado= [
        "name" => "Teclado",
        "price" => 200,
        "marca" => "azus"
    ];

    $listaproductos = [$pc, $teclado];

    foreach ($listaproductos as $item){
             echo $item['name'] . "<br>";
    }

});
function valedateAge($age){

     if ($age >= 18){
        return "Soy mayor de edad.";

    }else {
        return "Soy menor de edad.";
    }

}
   



<?php

require("CalculadoraService.php");


$primerValor = $_GET['primerValor'];
$segundoValor =  $_GET['segundoValor'];
$operacion = $_GET['operacion'];

$calculadora = new CalculadoraService();

if ($operacion == $calculadora::SUMA) {
    $resultado = $calculadora->sumar($primerValor, $segundoValor);
    $oracion = "El resultado de sumar " . $primerValor . " y " . $segundoValor . " es " . $resultado . ".";
} else {
    $oracion = 'Operacion no implementada';
}

echo($oracion);

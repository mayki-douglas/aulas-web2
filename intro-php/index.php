<?php

echo "hello world";

$name = "mayki";

$sum = 10 + 20;
$subtract = 20 - 10;
$subtractWithStrings = "20" - 10;

const TESTE = "teste<br>";

define("SOBRENOME", "testando");

echo "<h1>salve $name</h1>";

echo TESTE. " " .SOBRENOME;

echo "<br>o resultado da soma é $sum";

echo "<br>o resultado da subtração é $subtract";
echo "<br>o resultado da subtração usando uma string é $subtractWithStrings";

echo "<br>Velocidade Média: ". mru(0, 100, 0, 2);

function mru(float $initialPosition, float $finalPosition, float $initialTime, float $finalTime):float
{
    return ($finalPosition - $initialPosition) / ($finalTime - $initialTime);
}

function converterFarenheit(float $valorCelsius):float
{
    return ($valorCelsius * 9 / 5) + 32;
}

echo "<br>Temperatura em Farenheit: ". converterFarenheit(10);

function converterKelvin(float $valorCelsius):float
{
    return ($valorCelsius + 273.15);
}

echo "<br>Temperatura em Kelvin: ". converterKelvin(10);

function converterRankine(float $valorCelsius):float
{
    return ($valorCelsius * 9/5 + 491.67);
}

echo "<br>Temperatura em Rankine: ". converterRankine(10);
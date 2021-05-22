<?php

$numeros = [1, 2, 3, 4, 5];
$multiplicador = 2;

$resultado = array_map(fn ($item) => $item * $multiplicador, $numeros);

var_dump($resultado);
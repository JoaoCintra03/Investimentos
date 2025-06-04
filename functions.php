<?php

require_once 'classes/Ativo.php';
require_once 'classes/Dividendo.php';


function calcularTotalinvestido () {
    $ativo = new Ativo ();
    $investimentos = $ativo->calcularPrecoMedio(); 

    $total = 0;  
    foreach($investimentos as $item) {
        $total += $item['total_valor']; 
    }

    return number_format($total, 2, ',', ',');
}

function calcularTotalDividendos () {
    $dividendo = new Dividendo();
    $dividendos = $dividendo->calcularDividendosPorAtivo();

    $total = 0;

foreach($dividendos as $item) {
    $total += $item['total_dividendos'];
}
    return number_format($total, 2, ',', ',');

}
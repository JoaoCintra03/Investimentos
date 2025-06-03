<?php
    require_once "classes/Ativo.php";
    require_once "classes/Dividendo.php";

    $ativo = new Ativo();
    $dividendo = new Dividendo();

    $investimentos  = $ativo->calcularPrecoMedio();
    $dividendos = $dividendo->calcularDividendosPorAtivo();

    $dadosGrafico = [];

    foreach($investimentos as $item) {
        $dadosGrafico[$item['ativo']] = [
            'investido' => $item['total_valor'],
            'dividendos' => 0
        ];
    }

    foreach($dividendos as $item) {
        if (isset($dadosGrafico[$item['ativo']])) {
            $dadosGrafico[$item['ativo']]['dividendos'] = $item['total_dividendos'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Investimentos x Dividendos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Relatório de Investimentos x Dividendos</h1>

</body>
</html>
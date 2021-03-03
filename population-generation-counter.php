<?php

// Script de calculo de populações
// coded by Lucas M. D.  - github.com/terremoth

// simulador de descendências básico

$populacao = $argv[1] ?? 2;
$maximoGeracoes = $argv[2] ?? 10;

echo "População inicial: $populacao".PHP_EOL;

if ($populacao < 2) {
    exit("Não há como crescer uma população com menos de 2 indivíduos");
}

for ($i=1; $i <= $maximoGeracoes; $i++) {
    echo "Geração $i: \t ";
    echo "Antes: $populacao \t ";
    $pUnico = $populacao % 2;
    $pFilhos = (int)($populacao / 2);
    $populacao += $pFilhos + $pUnico;
    echo "Filhos: $pFilhos \t Sobras: $pUnico \t Total: $populacao".PHP_EOL;
}

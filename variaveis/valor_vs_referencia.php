<div class="titulo">Valor vs Referência</div>
<?php
    $variavel = 'valor inicial';
    echo $variavel;

    // Atribuição por valor
    $variavelValor = $variavel;
    echo '<br>' . $variavelValor;
    $variavelValor = 'Novo valor';
    echo '<br>' . $variavel;
    echo '<br>' . $variavelValor;

    // Atribuição por Referência
    $variavelReferencia = &$variavel;
    $variavelReferencia = 'Mesma referencia';

    echo '<br>' . $variavelReferencia;
    echo '<br>'. $variavel;

?>
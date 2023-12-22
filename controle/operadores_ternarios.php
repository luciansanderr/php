<div class="titulo">Operadores Ternários</div>
<?php 
    $idade = 70;
    $status;

    if ($idade >= 18) {
        $status = "Maior de Idade";
    } else {
        $satus = "Menor de Idade";
    }

    echo "$status <br>";
    
    $idade = 26;
    $status = $idade >= 18 ? "Maior de Idade":"Menor de Idade";
    echo "$status <br>";

    $idade = 10;
    $status = $idade >= 18 ? $idade >= 65 ? "Aposentar" : "Maior de Idade" : "Menor de Idade";

    echo $status;
?>
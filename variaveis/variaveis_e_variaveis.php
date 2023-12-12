<div class="titulo">Variaveis e Variaveis</div>
<?php
    $a = 'valorA';
    $$a = 'valorAA';
    echo "$a {$$a} ${$a} $valorA";

    echo "<br>";

    $epa = 'opa';
    $opa = 'vish';
    $vish = 'eitaa';
    echo "$epa {$$epa} {$$$epa}"; 

    $nome = 'Lucas';
    $Lucas = 'Silva';
    $Silva = 'Piedade';
    echo "<br>";
    echo "$nome {$$nome} {$$$nome}";
    echo "<br>";
    var_dump($$nome);
?>
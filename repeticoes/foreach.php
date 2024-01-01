<div class="titulo">Foreach</div>
<?php
    $array = [
        1 => "Domingo",
        "Segunda",
        "Terça",
        "Quarta",
        "Quinta",
        "Sexta",
        "Sábado"
    ];
    print_r ($array);

    echo "<hr>";
     
    foreach ($array as $semana) {
        echo $semana."<br>";
    }

    echo "<br>";

    foreach ($array as $indice => $valor) {
        echo "$indice => $valor.<br>";
    }

    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    foreach ($matrix as $linha) {
        //echo $linha;
    }

    foreach ($linha as $letra) {
        echo "$letra ";
    }
    echo"<br>";

    // pegando pelo indice da array &$dobrar
    $numeros = [1,2,3,4,5];
    foreach ($numeros as &$dobrar) {
        $dobrar *= 2;
        echo $dobrar."<br>";
    }
    print_r($numeros);
?>
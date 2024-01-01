<div class="titulo">Desafio For</div>

<?php
    $matrix = [
        ['#'],
        ['#', '#'],
        ['#', '#', '#'],
        ['#', '#', '#', '#'],
        ['#', '#', '#', '#', '#'],
    ];

    for ($i=0; $i < count($matrix); $i++) {
        for ($j=0; $j < count($matrix[$i]); $j++) { 
            echo $matrix[$i][$j];
        }
        echo "<br>";
    }

    echo "<hr>";
    // vazio
    $impressao = '';
    for ($count = 0; $count <= 5 ; $count++) {
        $impressao .='#';
        echo "$impressao <br>";
    }

    echo "<hr>";

    for ($impressao2 = '#'; $impressao2 !== '#####'; $impressao2 .='#')
    {
        echo $impressao2.'<br>';
    }
?>
<div class="titulo">Mapa</div>
<?php
    $dados = array(
        "idade" => 25,
        "cor"=> "verde",
        "peso" => 60.0,
    );

    print_r($dados);

    //var_dump($dados[0]);
    //echo $dados[0];
    echo '<br>' . $dados["idade"];
    echo "<br>". $dados["cor"];
    echo"<br>". $dados["peso"];
    //echo"<br>". $dados["outro_valor"];

    $lista = array (
        "a",
        "cinco" => "br",
        8 => "d",
        "e",
        6 => "f",
        "g",
        8 => "h"
    );

    echo '<br>';
    print_r($lista);

    $lista[] = 'i';
    echo '<br>';
    var_dump($lista);

    $lista['vinte'] = 'j';
    echo '<br>';
    print_r($lista);

    $lista[false] = 'Tentei indexar booleano, virou 0';
    echo '<br>';
    print_r($lista);

?>
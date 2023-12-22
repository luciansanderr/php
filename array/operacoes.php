<div class="titulo">Operações</div>
<?php 
    $dados1 = [
        "nome"=> "Dolas",
        "idade"=> 40,
    ];
    $dados2 = [
        "naturalidade" => "Brasileira"
    ];
    // adicionando um elemento na array de destino ou armazenada na variável
    $dados2 ["end"] = "rua tal";


    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);

    //verificar se realmente é uma array
    echo '<br>' . is_array($dadosCompletos);
    //contando os elementos dentro do array
    echo '<br>' . count($dadosCompletos);

    echo '<br>';

    // selecionar aliatoriamente algo dentro da array
    $indice = array_rand($dadosCompletos);
    echo "$indice = $dadosCompletos[$indice]";

    echo '<br>';
    // interpolação
    // verificação de dados interporlados 
    echo "{$dadosCompletos['idade']}";
    // Outra forma 
    echo " ${dadosCompletos["idade"]}";

    //removendo algo da array(um elemento)
    unset($dadosCompletos["nome"]);
    echo "<br>";
    print_r($dadosCompletos);

    unset($dadosCompletos);
    // echo "<br>";
    // var_dump($dadosCompletos);

    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6];
    // obs: chaves anexidas pro imteiros, ele podem engolir tal indice
    $decimais = $pares + $impares;
    echo "<br>";
    print_r($decimais);

    // array marge junção
    // $decimais = array_marge($pares + $impares);
    // echo "<br>";
    // print_r($decimais);

    // ordenar a array
    sort($decimais);
    echo "<br>";
    print_r($decimais);

?>
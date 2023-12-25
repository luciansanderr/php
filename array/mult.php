<div class="titulo">Multidimensionais</div>
<?php
    $dados = [
        [
            "nome"=> "Roberto",
            "idade"=> 56,
            "naturalidade"=> "Brasil"
        ],
        [
            "nome"=> "Luis",
            "idade"=> 10,
            "naturalidade" => "França"
        ],
    ];
    // acessando informações dentro da array
    print_r($dados);
    echo "<br>" . $dados[0]['idade'];
    echo "<br>" . $dados[1]['idade'];
    
    // inserindo dados
    $dados[] = [
        "nome"=> "Lucian",
        "idade"=> 60,
        "naturalidade"=>"Mudi"
    ];
    // dentro de dados está todo mundo da array, armezanado na memória
    print_r($dados);

    $dados[2]['Visinho'] = 'Bruno';
    echo "<br>" . print_r($dados[2]);

    // removendo um elemento de uma array, logo em seguida será prenchido os indices
    unset($dados[1]);

    print_r($dados);

?>
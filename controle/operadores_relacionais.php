<div class="titulo">Operadores Relacionais</div>
<?php
    var_dump(1 == 1); //igual
    var_dump(1 > 1); //falso
    var_dump(1 >= 1); //true
    var_dump(1 < 1); //false
    var_dump(1 <= 1);
    var_dump(1 != 1);
    var_dump(1 <> 1);

    var_dump(111 == '111');
    var_dump(111 === '111');
    var_dump(111 != '111');
    var_dump(111 !== '111');


    echo "<p>Usando Relacionais no if</p><hr>";
    $idade = 30;
    if ($idade < 18) {
        echo "Menor de Idade = $idade! anos";
    } else if($idade < 65){
        echo "Adulto = $idade! anos";
    } else {
        echo "Se aposentar = $idade! anos";
    }

    echo "<p>Spaceship</p><hr>";
    var_dump(500 <=> 3);
    var_dump(50 <=> 50);
    var_dump(5 <=> 50);

    echo "<p>Valores podem ser V ou F</p><hr>";
    var_dump(!!5);
    var_dump(!5);

?>

<style>
    p {
        margin-bottom: 0px;
    }
    hr {
        margin-top: 0px;
    }
</style>

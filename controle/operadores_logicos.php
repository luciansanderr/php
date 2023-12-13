<div class="titulo">Operadores Lógicos</div>
<!-- <link rel="stylesheet" href="recursos/css/estilo.css">
<link rel="stylesheet" href="../recursos/css/estilo.css"> -->
<?php
    echo "<pclass='divisao'>V ou F</p><hr>";
    var_dump(true);
    echo "<br>";
    var_dump(!true); //not

    echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";

    var_dump(true && true); 
    var_dump(true && false); 
    var_dump(false && true);
    var_dump(false && false);
    var_dump(true && 3>2 && 7<=7);

    echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>"; 

    var_dump(true || true);
    var_dump(false || true);
    var_dump(true || false);
    var_dump(false || false);
    var_dump(true || true);


    echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>"; 

    var_dump(true xor true);
    var_dump(false xor true);
    var_dump(true xor false);
    var_dump(false xor false);

    echo "<p class='divisao'>Exemplo</p><hr>"; 
    $idade = 60;
    $sexo = 'M';

    $pagouPrevidencia = true;

    $criterioHomem = ($idade >= 65 && $sexo === 'M');
    $criterioMulher =  ($idade >= 60 && $sexo === 'F');
    $atingiuCriterio = $criterioHomem || $criterioMulher;
    $podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
    echo "Pode se aposentar -> $podeSeAposentar <br>";

    echo "<p class='divisao'>Exemplo 2</p><hr>"; 

    if ($idade >= 60 && $sexo === 'F') {
        echo  "Pode se aposentar -> $sexo";
    } else if ($idade >=65 && $sexo === 'M'){
        echo "Pode se aposentar -> $sexo";
    } else {
        echo "Vai ter de trabalhar mais um pouco";
    }

?>




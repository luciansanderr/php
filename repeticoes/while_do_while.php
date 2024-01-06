<div class="titulo">while_do_while</div>
<?php
    const VALOR_LIMITE = 5;
    $contador = 0;
    // diferença que coloca o "do" no começo e define o bloco depois
    do {
        echo "while $contador <br>";
        $contador++;
    } while ($contador < VALOR_LIMITE);
   // obs: possui ; na estrutura de controle
    echo "<br><hr>";

    const VALOR_LIMITE2 = 10;
    $contador2 = 0;
    while ($contador2 <  VALOR_LIMITE2) {
        echo "while $contador2 <br>";
        $contador2++;
    }

    echo "<br><hr>";
    $contador = 2;
    while (true) {
        echo "while(true) $contador <br>";
        $contador++;
        if($contador >= VALOR_LIMITE) break;
    }
?>
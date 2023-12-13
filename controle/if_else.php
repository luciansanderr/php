<div class="titulo">If_Else</div>
<?php
    // // {} Bloco de código
    // // Sentença de código php termina em ;
    // {
    // echo "Linha 1";
    // echo "Linha 2";
    // }
    if(true) {
        echo "Serei impresso?";
        // echo "<br> Serei impresso novamente?";
    }

    if(true) {
        echo "<br> Verdadeiro";
    } else {
        echo "<br> Falso";
    }
    echo "<br> Fim";

    echo "<br>";

    if(false) {
        echo "<br> Passo A";
    } else if (true){
        echo "<br> Passo B";
    } else {
        echo "Ulitmo Passo";
    }
    echo "<br> Fim";

    if(false) {
        echo "<br> Passo A";
    } else if (false) {
        echo "<br> Passo B";
    } else if (true) {
        echo "Passo C";
    } else {
        echo "Ultimo Passo";
    }
    echo "<br> Fim";
?>
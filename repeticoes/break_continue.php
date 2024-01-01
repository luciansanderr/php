<div class="titulo">Break Continue</div>
<?php
    $count = 16;
    for( ; ; ){
        echo "$count <br>";
        $count++;
        if($count > 20) {
            break;
        }        
    }

    echo "<br><hr>";

    for (;;) { 
        $cont++;
        if($cont % 2 === 1) continue;
        echo "$count <br>";
        if($cont >= 30) {
            break;
        }
    }

    echo "<br><hr>";

    foreach (array(1, 2, 3, 4, 5) as $valor) {
        if($valor === 5) break;
        if($valor % 2 === 0) continue;
        echo "$valor <br>";
    }
?>
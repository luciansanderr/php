<div class="titulo">Comparação Array</div>
<?php
    $arr1 = ['nome' => 'Lucian', 'idade' => '20'];
    $arr2 = ['nome' => 'Lucian', 'idade' => '20'];

    var_dump($arr1);
    echo "<br>";
    var_dump($arr2);
    echo "<br>";
    var_dump ($arr1 == $arr2);
    var_dump($arr1 === $arr2);

    echo "<br>";

    // tipo entendi como diferente
    $arry3 = ['nome' => 'Maria', 'idade' => 230];
    var_dump($arry3);
    $arr4 = ['idade' => '2', 'nome'=> 'Maria'];
    var_dump($arr4 == $arr3);
    var_dump($arr4 === $arr3);
    var_dump($arr1 != $arr4);
    var_dump($arr1 !== $arr4);

?>
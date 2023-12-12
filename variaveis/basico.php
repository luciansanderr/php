<div class="titulo">Tipo Variáveis</div>
<?php
    $a = 20;
    echo $a;
    $numeroA = 13;
    echo '<br>' . $numeroA . "<br>";
    var_dump($numeroA);

    echo "<br>";

    $a = 20;
    $b = 60;
    $soma = $a + $b;
    echo $soma ."<br>";

    echo isset($soma);
    unset($soma);
    echo "<br>";
    //var_dump($soma);

    echo "<br>";

    $variavel = 10;
    echo "<br>" . $variavel;

    $variavel = "Agora sou uma string";
    echo "<br>" . $variavel;

    //Nomes de Variáveis

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
//$5var = 'invalido';
//$%var = "invalido";
//$var8% = "invalido";

echo '<br>';

var_dump($_SERVER["HTTP_HOST"]);

?>
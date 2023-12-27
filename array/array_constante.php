<div class="titulo">Array Constantes</div>
<?php
//criação de costantes e definições em php
    const FRUTAS = array("Laranja", "Maçã", "Manga");
    echo FRUTAS[2];
    echo "<br>";
    const CARRO = array("Fiat" => "Uno", "Ford" => "Fiesta");
    echo CARRO["Fiat"];

    define("CIDADES", array('Belo Horizonte', 'Recife'));
    echo '<br>' . CIDADES[1];

?>
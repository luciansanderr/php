<div class="titulo">Switch</div>
<?php
    $categoria = 'Hath';
    $modelo = '';
    $preco = '';

    if ($categoria === 'Luxo') {
        $modelo = 'Mercedez';
        $preco = 100000;
    } else if ($categoria === 'Sedan') {
        $modelo = 'Etios';
        $preco = 40000;
    } else if ($categoria === 'Hath') {
        $modelo = 'Polo';
        $preco = 71000;
    }
    $precoFormatado = number_format($preco,2,",",".");
    echo "Categoria: $categoria, Modelo: $modelo, Preço: $precoFormatado";
    
    echo "<br>";

    $categoria = "polo";
    switch (strtolower($categoria)) {
        case "Luxo":
            $modelo = "Ferrary";
            $preco = 80000;
        break;
        case "Sedan":
            $modelo = "Etios";
            $preco = 40000;
        break;
        case "Hatch":
            $modelo = "Polo";
            $preco = 74000;
        break;
        default:
            $modelo = "Mobi";
            $preco = 0;
        break;
    }

    $precoFormatado = number_format($preco,2,",",".");
    echo "Modelo: $modelo, Preço: $precoFormatado";
?>
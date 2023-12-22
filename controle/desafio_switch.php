<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="metros-km">Metros > Km</option>
        <option value="km-metros">Km > Metros</option>
        <option value="fireraid-celsius">Fireraid > Celsius</option>
        <option value="celsius-fireraid">Celsius > Fireraid</option>
    </select>
    <button>Calcular</button>
</form>
<?php

    const FATOR_KM_MILHA = 0.621371;
    const FATOR_METRO_KM = 1000;
    //const FATOR_FIRE = 5;
    const FATOR_CELS = 32;

    $parametro = $_POST['param'] ?? 0;
   
    switch ($_POST['conversao']) {
        case 'km-milha':
            $distancia = $parametro * FATOR_KM_MILHA;
            $mensagem = "$parametro KM = $distancia Milhas";
        break;
        case 'milha-km':
            $distancia = $parametro / FATOR_KM_MILHA;
            $mensagem = "$parametro Milhas = $distancia Km";
        break;
        case 'metro-km':
            $distancia = $parametro / FATOR_METRO_KM;
            $mensagem = "$parametro Metros = $distancia Km";
        break;
        case 'km-metro':
            $distancia = $parametro * FATOR_METRO_KM;
            $mensagem = "$parametro Km = $distancia Metros";
        break;
        case 'celsius-fireraid':
            $Cels = $parametro * 9/5 + FATOR_CELS;
            $mensagem = "$parametro Cels = $Cels";
        break;
        case 'fireraid-celsius':
            $Fire = ($parametro - FATOR_CELS) * 5/9;
            $mensagem = "$parametro Fire = $Fire";
        break;
    default:
        echo "Nem um parâmetro passado";
        break;
    }
    //$parametroFormatado = number_format($parametro,3,".","");
    //echo $parametroFormatadoKMmILHA;
    echo $mensagem;
?>
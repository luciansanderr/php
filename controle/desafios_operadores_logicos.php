<div class="titulo">Desafios Operadores Logicos</div>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça)</label>
        <select name="t1" id="t1">Olá
        <option value="1">Executado</option>
        <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta)</label>
        <select name="t2" id="t2">Olá
        <option value="1">Executado</option>
        <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<?php
    $terça = $_POST['t1'];
    $quinta =  $_POST['t2'];
    if ($terça == 1 && $quinta == 1) {
        echo "TV 50 e sorvete";
    } else if ($terça == 0 && $quinta == 1 || $quinta == 0 && $terça == 1) {
        echo "TV 32 e sorvete";
    } else if ($terça == 0 && $quinta == 0){
        echo "Não vai fazer nada";
    }
?>
<style>
    button,select {
        font-size: 1.8rem;
    }
</style>
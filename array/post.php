<div class="titulo">$_POST</div>

<form action="#" method="post">
    Nome<input type="text" name="nome">
    Sobrenome<input type="text" name="sobrenome">
    <select name="estado" id="">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 0.1 rem;
    }
</style>

<?php
    print_r ($_GET);
    print_r ($_POST);
    echo "<br>" . count($_POST);
?>
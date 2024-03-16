<?php
    $numerador1 = 0;
    $numerador2 = 0;
    $resultado = 0;
    $calcular = 'Escolha o operador';

    if(isset($_GET['numerador1'], $_GET['numerador2'], $_GET['Calcular'] )){
        $numerador1 = $_GET['numerador1'];
        $numerador2 = $_GET['numerador2'];
        $calcular = $_GET['Calcular'];

        switch ($calcular) {
            case 'Somar';
                $resultado = $numerador1 + $numerador2;
            break;

            case 'Subtrair';
                $resultado = $numerador1 - $numerador2;
                break;

            case 'Multiplicar';
                $resultado = $numerador1 * $numerador2;
                break;

            case 'Dividir';
                $resultado = $numerador1 / $numerador2;
                break;

            case 'Potencializar';
                $resultado = $numerador1 ** $numerador2;
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <form>
            Insira um numero <br />
        <input type="number" name="numerador1" value="<?=$numerador1?>" required /><br />
            Insira um numero <br />
        <input type="number" name="numerador2" value="<?=$numerador2?>" required /><br /><br />
        <?=$calcular?> <br />
        <select name="Calcular">
            <option value="Somar" <?= ($calcular=='Somar')?'Selected':''; ?> >"Somar" </option>
            <option value="Subtrair" <?= ($calcular=='Subtrair')?'Selected':''; ?> >"Subtrair" </option>
            <option value="Multiplicar"<?= ($calcular=='Multiplicar')?'Selected':''; ?> >"Multiplicar"  </option>
            <option value="Dividir"<?= ($calcular=='Dividir')?'Selected':''; ?> >"Dividir"  </option>
            <option value="Potencializar"<?= ($calcular=='Potencializar')?'Selected':''; ?> >"Potencializar"  </option>
        </select>
        <br /><br />
        <input type="submit" value="Calcular"/> <br />
        <p> O resultado é <?= $resultado?> </p>

    </form>

</body>
</html>

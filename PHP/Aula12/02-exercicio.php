<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $valor = isset ($_GET ["val"]) ? $_GET ["val"] : 1;
        echo "<h1>Calculando o fatorial de $valor ...</h1>";
        $c = $valor;
        $fat = 1;
        do {

            $fat = $fat * $c;
            $c--;
        }while ($c >= 1);
        echo "<h2>$valor ! = $fat</h2>";
    ?>
    </br><a href="">Voltar</a>
</body>
</html>
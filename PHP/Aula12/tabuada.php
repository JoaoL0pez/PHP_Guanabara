<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $numero = isset ($_GET ["num"]) ? $_GET ["num"] : 1;
        echo "Monstrado a tabuada de $numero";

        $c = 1;
        do {
            
            $r = $numero * $c;
            echo "</br> $numero x $c = $r";
            $c++;
        }while ($c <= 10);
    ?>
    </br><a href="tabuada.html">Voltar</a>
</body>
</html>
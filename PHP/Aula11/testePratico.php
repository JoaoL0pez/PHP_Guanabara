<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $inicio = isset ($_GET["i"]) ? $_GET["i"] : 0;
        $final = isset ($_GET["f"]) ? $_GET["f"] : 0;
        $incremento = isset ($_GET["ic"]) ? $_GET["ic"] : 1;
 
        if ($inicio < $final) {
            while ($inicio <= $final) {
                echo "$inicio .";
                $inicio += $incremento;
            }
        }
        elseif ($inicio > $final) {
            while ($inicio >= $final) {
                echo "| $inicio ";
                $inicio -= $incremento;
            }
        }

    ?>
    </br><a href="testePratico.html">Voltar</a>
</body>
</html>
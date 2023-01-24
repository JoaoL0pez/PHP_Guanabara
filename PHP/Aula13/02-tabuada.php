<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $n = isset($_GET["num"]) ? $_GET ["num"] : 1;
        for ($c = 1; $c <= 10; $c++) {
            $r = $n * $c;
            print "| $n x $c = $r |";
            print "<br/>";
        }
    ?>
    </br><a href="02-exercicio.php">Voltar</a>
</body>
</html>
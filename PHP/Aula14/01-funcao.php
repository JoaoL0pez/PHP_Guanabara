<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        function soma ($a, $b) {
            $s = $a + $b;
            print "<p>A soma vale $s</p>";
        }

        soma(3,4);
        soma(8,2);
        $x = 9;
        $y = 15;
        soma ($x, $y);


    ?>
    </br><a href="">Voltar</a>
</body>
</html> 
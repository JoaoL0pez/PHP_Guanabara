<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        function teste(&$x) {
            $x += 2;
            print "O valor de X é $x";
        }

        $a = 3;
        teste($a);
        print "<p>O valor de A é $a</p>";

    ?>
    </br><a href="">Voltar</a>
</body>
</html>
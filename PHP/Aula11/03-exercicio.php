<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $i =1;
        while ($i <= 5) {
            $v = "num". $i;
            $url = "v". $i;
            $$v = isset ($_GET[$url]) ? $_GET[$url] :0;
            $i++;
        }
        $i = 1;
        while ($i <= 5) {
            $v = "num". $i;
            echo "Valor $i : ". $$v . "</br>";
            $i++;
        }
    ?>
    </br><a href="">Voltar</a>
</body>
</html>
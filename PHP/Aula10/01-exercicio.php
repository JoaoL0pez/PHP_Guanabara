<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $numero = isset ($_GET ["num"]) ? $_GET ["num"] : 0;
        $operacao = isset ($_GET ["oper"]) ? $_GET ["oper"] : 1;
        

        
        switch ($operacao) {
            case 1:
                $r = $numero * 2;
                echo "O resultado do calculo é $r";
                break;
            case 2:
                $r = $numero ^ 3;
                echo "O resultado do calculo é $r";
                break;
            case 3:
                $r = sqrt($numero); // ou $numero ^ (1/2)/(0.5);
                echo "O resultado do calculo é <span class='foco'>$r</span>";

        }

    ?>
    <br/><a href="01-exercicio.html">Voltar</a>
</body>
</html>
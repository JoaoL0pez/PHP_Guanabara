<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $dSemana = isset ($_GET ["ds"]) ? $_GET ["ds"] : "Nenhum dia inserido.";
        switch ($dSemana) {
            case 2:
            case 3:
            case 4:
            case 5:
             echo "Levanta da cama e vai <span class='foco'>estudar! :)</span>";
            break;
            case 6:
            case 7:
                echo "Descanse, pequeno <span class='foco'>gafanhoto!</span>";
            default:
                echo"Dia da semana <span class='foco2'>Invalido</span</br>";
        }
    ?>
    </br><a href="02-exercicio.html">Voltar</a>
</body>
</html>
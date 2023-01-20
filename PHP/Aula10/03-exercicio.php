<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $estado = isset ($_GET["opt"]) ? $_GET["opt"] : "Nenhum valor encontrado.";
        switch ($estado) {
            case 1:
                echo "São Paulo é a região <span class='foco'>Sudeste</span> do país";
            break;
            case 2:
                echo "Maranhão é a região <span class='foco'>Nordeste</span> do país";
            break;
            case 3:
                echo "Rio Grande do Sul é a região <span class='foco'>Extremo Sul</span> do país";           
            break;
            case 4:
                echo "Brasília é a região <span class='foco'>Centro-Oeste</span> do país";
        }

    ?>
    </br><a href="03-exercicio.html">Voltar</a>
</body>
</html>
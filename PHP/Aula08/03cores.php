<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET ["t"]) ? $_GET["t"] : "Texto Genérico";
        $tam = isset ($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset ($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <style>
        span.texto {
            font-size: <?php echo "$tam"; ?>;
            color: <?php echo "$cor"; ?>; 

        }
    </style>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>" //span é uma tag que serve para destacar algum trecho a ser editado ou estilizado sem afetar o restante do codigo.
        ?>
        <a href="03-exercicio.html" >Voltar</a>
    </div>
</body>
</html> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>eleicao</title>
</head>
<body>
    <?php
        $ano = $_GET["an"];
        $idade = 2023 - $ano;
        echo "A pessoa tem $idade anos.";
        $vt = ($idade > 18 and $idade < 65) ? "ESTA PESSOA É OBRIGADA Á VOTAR." : "ESTA PESSOA NÃO É OBRIGADA Á VOTAR.";
        echo "<br/>$vt";
    ?>
</body>
</html>
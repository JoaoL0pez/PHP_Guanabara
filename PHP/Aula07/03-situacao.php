<!DOCTYPE html>
<html lang="pt-br">  
<head>
    <meta charset="UTF-8">
    <title>operadores</title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];
        $m = 7;
        $nf = ($n1 + $n2 + $n3) / 3;
        $rf = ($nf < $m) ? "RECUPERAÇÂO" : "APROVADO";
        echo "Situação do aluno e $rf";

    ?>
</body>

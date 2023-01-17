<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>igual</title>
</head>
<body>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a === $b)?"SIM":"NÃO"; // enquanto "==" verifica que se os valores atribuidos são iguais, no "===" é verificado se os valores são idênticos, ou seja, possuem mesmos valores e do mesmo tipo primitivo.
        echo "As variaveis A e B sao iguais? <br/>$r";
    ?>
</body>
</html>
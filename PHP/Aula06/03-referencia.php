<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>operadores</title>
</head>
<body>
    <?php
        $a = 3;
        $b = &$a; //o "&" ligará a variavel $b com o $a; Automaticamente, o que o $b valer, o $a valerá.
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br/>A variavel B vale $b";

    ?>
</body>
</html>
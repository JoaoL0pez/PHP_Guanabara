<!DOCTYPE html>
<html lang="p-br">
<head>
    <meta charset="UTF-8">
    <title>operadores</title>
</head>
<body>
    <?php
        $preco = $_GET ["p"];
        echo "O preco do produto e R$ ". number_format($preco, 2);
        $preco = $preco + ($preco*10/100);
        echo"<br/>O novo preco com 10% de aumento sera R$ ". number_format($preco, 2);
    ?>
</body>
</html>
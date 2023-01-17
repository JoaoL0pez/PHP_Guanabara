<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>operadores</title>
</head>
<body>
    <?php
        //comentário in-line
        #comentario in-line
        /*comentario multiLinha*/
        /*esse exercicio pretende demonstrar o uso de operados e incremento e decremento*/
        $atual = $_GET["aa"]; //essa linha vai pegar o ano na URL
        echo"O ano atual e $atual e o ano anterior e ". --$atual;

    ?>
</body>
</html>
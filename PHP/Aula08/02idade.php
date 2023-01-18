<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CUrso PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $nome = isset ($_GET ["nome"]) ? $_GET ["nome"] : "[não informado]"; //"isset" se foi passado com parametro. //o que é definido como "name" no HTML, no PHP será o valor dentro do $_GET
        $ano =  isset ($_GET ["ano"]) ? $_GET ["ano"] : "[não informado]";
        $sexo = isset ($_GET ["sexo"]) ? $_GET ["sexo"] : "[não informado]";
        $idade = date("Y") - $ano; //o comando date usará da data atual. Y maisculo será o ano por extenso e minusculo apenas 2 digitos.
        echo "$nome é $sexo e tem $idade anos.";
    ?>
    <a href="02-exercicio.html"> Voltar </a>
</body>
</html>
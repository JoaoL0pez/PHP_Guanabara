<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>operacao</title>
</head>
<body>
    <?php
        //"s" simbolizará "soma". Qualquer outro valor atribuido á $tipo diferente de "s", será feita uma multiplicação entre as variaveis $n1 e $n2.
        $n1 = $_GET ["a"];
        $n2 = $_GET ["b"];
        $tipo = $_GET ["op"]; //"op" valor atribuido ao $tipo através do URL
        echo "Os valores passados foram $n1 e $n2<br/>";
        $r = ($tipo == "m") ? $n1 + $n2 : $n1 * $n2; //o ":" pode ser interpretado como "senão" igualmente do algoritmo e "?" como "se". O $tipo foi atribuido como "op", e via URL foi lhe atribuido um conteudo "s". Ou seja, como $tipo == "s", então será feita a soma entre $n1 e $n2, senão, seria feita a multiplicação entre as variaveis.
        echo "O resultado sera $r";
    ?>
</body>
</html>
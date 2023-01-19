<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <?php
        $a = isset ($_GET["ano"]) ? $_GET["ano"] : "Nenhum valor inserido.";
        $i = date("Y") - $a;
        echo "Você nasceu em $a";
        echo "<br/>Hoje, você tem $i anos."; // ELSEIF DIMINUI UM BLOCO E DEIXA O CODIGO MAIS OTIMIZADO.
        if ($i < 16) {
            $tipoVoto = "VOTAR [NÃO].";
            $d = "DIRIGIR [NÃO]";
        }
        elseif (($i > 16 and $i < 18) or ($i > 65)) {
                $tipoVoto = "VOTAR [OPCIONAL].";
                $d = "DIRIGIR [APTO]";
        }
        else {
            $tipoVoto = "VOTO [OBRIGATÓRIO]";
            $d = "DIRIGIR [APTO]";
        }
        
        echo "<br/>Você pode:<br/> $tipoVoto <br/> $d";
        ?>
    </div>
</body> 
</html> 



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
        echo "<br/>Hoje, você tem $i anos.";
        if ($i >= 17) {
            $v = "Possibitado para votar";
            $d = "Possibilitado á dirigir.";
        }
        else {
            $v = "Impossibitado para votar";
            $d = "Impossibilitado para dirigir";
        }
        echo "<br/>***STATUS: Você é $v e $d.";

        ?>
    </div>
</body> 
</html> 
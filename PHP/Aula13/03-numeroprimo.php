<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>

</head>
<body>
    <?php
        $numero = isset ($_GET["op"]) ? $_GET["op"] : 1;
        $c = 0;
        $i = 0;
        $contador = 0;

        print "Analisando o número $numero ... ";
                print "<br/>";
        print "Ele é múltiplo por: ";

        for ($i = 1; $i <= $numero; $i++) {
            if (($numero%$i) == 0) {
                print " | $i";
                $contador += 1;
            }
        }
        
        print "<br/>";

        if ($contador == 2) {
            print "<br/>";
            print "Total de múltiplos: $contador";
            print "<br/>";
            print "RESULTADO: 5 <span class='foco2'>É PRIMO!</span>";

        }
        else {        
            print " O número inserido <span class='foco2'>NÃO É PRIMO!</span>";
        }

    ?>
    </br><a href="03-exercicio.php">Voltar</a>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        span {
            color: red;
            
        }

    </style>
</head>
<body>
    <div>
        <?php
            $nota1 = isset ($_GET ["n1"]) ? $_GET ["n1"] : 0;
            $nota2 = isset ($_GET ["n2"]) ? $_GET ["n2"] : 0;
            $m = ($nota1 + $nota2) / 2;
            if ($m >= 7) {
                $s = "APROVADO";
            }
            elseif ($m >= 5 and $m < 7) {
                $s = "RECUPERAÇÃO";
            }
            else {
                $s = "REPROVADO";
            }
            echo "A média entre <span>". number_format($nota1, 1); echo"</span> e <span>". number_format($nota2, 2); echo "</span> é igual á <span>". number_format($m, 1); echo "</span>";
            echo "</br>Situação do aluno: <span> $s </span>";
        ?>
         </br><a href="avaliacao.html">Voltar</a>
    </div>
</body> 
</html> 
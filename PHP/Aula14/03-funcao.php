<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        function soma(){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i=0; $i<$t ; $i++) {
                $s += $p[$i];
            }
            return $s;
        }
        $r = soma(3,5,2, 8, 9, 4);
        print "A soma dos valores é $r";
    ?>
    </br><a href="">Voltar</a>
</body>
</html> 
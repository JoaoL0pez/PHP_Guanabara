<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <?php
            $valor = $_GET ["v"];
            $rq = sqrt($valor);
            echo "A raiz de $valor é igual a ". number_format($rq, 2); //number format formatará o numero como escolhido dentro dos parenteses. Mostrar o $rq com 2 casas decimais.
        
        ?>
        <a href="01-exercicio.html" >Voltar</a>
    </div>
</body>
</html> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <form method="get" action="03-numeroprimo.php">
            <Label for="n">Número: </label>
            <select id="n" name="op" >
                <?php    
                    for ($op = 1; $op <= 5; $op++) {
                        print "<option>$op</option>";
                    }
                ?>
                <input type="submit" value="É primo?"/>
            </select>
        </form>
    </div>
    <?php

    ?>
    </br><a href="">Voltar</a>
</body>
</html>
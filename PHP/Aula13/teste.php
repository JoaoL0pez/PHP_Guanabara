<?php
            //Pega o valor enviado
            $val = isset($_GET["val"])?$_GET["val"]:0;

            //variavel que conta os números multiplos
            $contador = 0;

            echo "<h3>Analisando o número $val...</h3>";

            //Número pelo qual ele é dividido
            echo "Ele é multiplo por: ";
            for($i=1; $i<=$val; $i++){
                if(($val%$i)==0){
                    echo "$i ";

                    //Toda vez que $val  for dividido/multiplicado por algum numero esse contador irá aumentar
                    $contador +=1;
                }
            }

            //Mostra a quantidade de números multiplos
            echo "<br>Total de multiplos: $contador<br>";

            //Verifica se ele é primo ou não
            echo "Resultado: ";
            if($contador > 2){
                echo "<strong style='color:red;'>$val NÃO É PRIMO</strong>";
            }
            elseif($contador == 2){
                echo "<strong style='color:blue;'>$val É PRIMO</strong>";
            }
        ?>
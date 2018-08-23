<!DOCTYPE html>
<html lang="pt-br">

<body>

<h1>Aula 14 - PHP Loop</h1>
<h2>Exercício 1</h2>
    <?php 
        for ($i = 0; $i <= 100; $i++) {
            echo "<p>$i</p>";
        }
    ?>
<h2>Exercício 2</h2>
    <?php 
        for ($i = 0; $i <= rand(1,100); $i++) {
            echo "<p>$i</p>";
        }
    ?>

<h2>Exercício 3</h2>
    <?php
        for ($j = 0; $j <= 10; $j++) {
            $tabuadaDoDois = $j * 2;
            echo "<p>$j x 2 = $tabuadaDoDois</p>";
        }
    ?>

<h2>Exercício 4</h2>
    <?php 
    
        $quantidadeDeCaras = 0;
        while ($quantidadeDeCaras < 5) {
            $moeda = rand(0,1);
            if ($moeda == 1 ) {
                $quantidadeDeCaras++;
            }
            $i++;
        }
        echo "<p>Joguei a moeda $i vezes!</p>";
    ?>

<h2>Exercício 5</h2>
    <?php 
        do {
            $moeda = rand(0,1);
            $i++;
        } while ($moeda != 1);
        echo "<p>Eu joguei a moeda $i vezes</p>";

    ?>
<h2>Exercício 6</h2>
    <h3>Resolvido com For</h3>
    <?php 
      $nomes = ["Thiago", "Anita", "Bruno", "Pablo", "Caju"];

      for ($i = 0; $i < count($nomes); $i++){
        echo "<p>$nomes[$i]</p>";
      }
    ?>
    <h3>Resolvido com While</h3>
    <?php
        $i = 0;
        while($i < count($nomes)){
            echo "<p>$nomes[$i]</p>";
            $i++;
        }
    ?>

    <h3>Resolvido com WhileDO</h3>
    <?php 
        $i = 0;
        do {
            echo "<p>$nomes[$i]</p>";
            $i++;
        } while (count($nomes));
    ?>

<h2>Exercicio 7</h2>
    <h3>Com FOR</h3>
        <?php
            function verificarONumeroCinco($variavel){
                if($variavel == 5){
                    echo "<p>Encontramos o número 5!</p>";
                } else {
                    echo "<p>$variavel<p>";
                }
                
            }
        ?>
        <?php
            $array = [];
            for ($i = 0; $i < 10; $i++){
                $array[$i] = mt_rand(0,10);
                verificarONumeroCinco($array[$i]);
            }
        ?>
        <h3>Com while</h3>
        <?php
            $array = [];
            $i = 0;
            while($i < 10){
                $array[$i] = mt_rand(0,10);
                verificarONumeroCinco($array[$i]);
                $i++;
            }
        ?>
        <h3>Com WhileDO</h3>
        <?php 
            $array = [];
            $i = 0;
            do {
                $array[$i] = mt_rand(0,10);
                verificarONumeroCinco($array[$i]);
                $i++;
            } 
            
         while ($i < 10);
        ?>

    
</body>
</html>

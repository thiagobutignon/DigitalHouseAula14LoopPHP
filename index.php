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

    
</body>
</html>

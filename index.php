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


    
</body>
</html>

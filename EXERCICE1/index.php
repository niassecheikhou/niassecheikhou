<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>exercice1</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    
    <Section class="container">

        <?php
            include "fonction.php";
            
             echo "le perimetre est de " .perimetre()."<br/>";
            echo "la surface est de " .surface()."<br/>";
            echo " la diagnonale est " .diagonale()."<br/>";

        ?>

    </section>
    <button><a href="../exercice2/index.php">suivant</a></button>
</body>
</html>


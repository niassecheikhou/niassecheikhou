
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
       
        <title>exercice2</title>
        <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
        
        <section class="container">
                <?php
                
                 include "fonction.php";
                
                 echo "<ol>"."<i>"."<strong>"." le perimetre est de : ".perimetre()."<br>"."<br>";
                 echo "<ol>"."<strong>"."la surface est de   :".surface()."<br>"."<br>";
                 echo "<ol>"."<strong>"."le diagonale est de : ".diagonale()."<br>"."<br>";
                 
                ?> 
         </section>
         <button><a href="../EXERCICE1/index.php">précedant</a></button>
         <button><a href="../exercice3/index.php">suivant</a></button>
         
          
</body>
</html>
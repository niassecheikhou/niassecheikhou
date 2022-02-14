 <!DOCTYPE html>
 <html lang="en">
 <head>
         <meta charset="UTF-8">
         
         <title>exercice</title>
         <link rel="stylesheet" href="CSS/style.css">   
 </head>
 <body>
        <section class="exercice3">
                <?php
                        
                        include "fonction.php";
                        echo "<i>"."<strong>"." la somme des deux valaurs est de ".somme()."<br>"."<br/>";
                        echo "<i>"."<strong>"."l'exponentiel des deux valaurs est de ".exponentiel()."<br>"."<br/>";
                        echo "<i>"."<strong>"."la difference des deux valaurs est de ".difference()."<br>"."<br/>";
                        echo "<i>"."<strong>"." le produit des deux valaurs est de ".produit()."<br>"."<br/>";
                        echo "<i>"."<strong>"."le modilo des deux valaurs est de ".modilo()."<br>"."<br/>";
                        echo "<i>"."<strong>"."la division des deux valaurs est de ".division()."<br>"."<br/>";
                        echo "<i>"."<strong>"."le carre des deux valaurs est de ".carre()."<br>"."<br/>";
                ?>
        </section>
                <button><a href="../exercice2/index.php">précedant</a></button>
                <button><a href="../exercice4/index.php">suivant</a></button>
 
 </body>
 </html>
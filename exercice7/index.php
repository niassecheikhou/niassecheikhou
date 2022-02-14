<?php
include_once('fonction.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>exercice7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['post'])) {
        
            $jour=$_SESSION["post"]["jour"];
            $mois=$_SESSION["post"]["mois"];
            $annee=$_SESSION["post"]["annee"];
        
            echo "la date precedante est de ";

             datePrecedante($jour,$mois,$annee);
                
        }
                     
        session_start();
        if (isset($_SESSION['post'])) {
        
            $jour=$_SESSION["post"]["jour"];
            $mois=$_SESSION["post"]["mois"];
            $annee=$_SESSION["post"]["annee"];

            echo "la date suivante est de ";

             dateSuivante( $jour, $mois, $annee);
             
        }
     ?>
    <section>
        
        <form method="post" action="controleur.php">
             <div class="container">
                    JOUR:<input type="text" placeholder="entrez ici le jour" name="jour" ><br>  
             
                    MOIS: <input type="text" placeholder="entrez ici le mois"name="mois" ><br>
            
                    ANNEE: <input type="text"placeholder="entrez ici l'année" name="annee" ><br>
             </div>
              <button type="submit" name="envoyer"> rechercher</button>
        </form>
    </section>
                <button><a href="../exercice6/index.php">précedant</a></button>
                <button><a href="../exercice8/index.php">suivant</a></button>
</body>
</html>

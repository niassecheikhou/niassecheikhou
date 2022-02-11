<?php
include_once('fonction.php');
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>exercice7</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <section>
        
        <form method="post" action="controleur.php">
             <div>
                    JOUR:<input type="text" placeholder="entrez ici le jour" name="jour" ><br>   
             </div>
             <div>
                    MOIS: <input type="text" placeholder="entrez ici le mois"name="mois" ><br>
             </div>
             <div>
                    ANNEE: <input type="text"placeholder="entrez ici l'année" name="annee" ><br>
             </div>
              <button type="submit" name="envoyer"> rechercher</button>
        </form>
    </section>
</body>
</html>

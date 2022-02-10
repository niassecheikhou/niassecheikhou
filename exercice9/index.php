<!-- Exercice 9 : Entrer un  nombre N à l’aide d’un formulaire
 puis générer une  table de multiplication 
 du nombre saisi.N est positif. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>exercice9</title>
</head>
<body>
    <form method="post" action="controleur.php">
       <table>
           
       <h3><label for="">table de multiplication</label></h3>
        <input type="text" name="nombreN" placeholder="entrer le nombre"></input>
        <button type="submit" name="envoyer">valider</button>
    </form>
</body>
</html>
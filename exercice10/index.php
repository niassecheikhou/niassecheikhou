<!-- Exercice 10 : Le nombre N est saisi à l’aide d’un formulaire 
et on génère les N champs inputs . N est positif. -->
<?php  
    include_once("fonction.php");
    session_start();
    if(isset($_POST["post"])){
        $nbre=$_SESSION["post"]["nbr"];
        echo "error";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>exercice10</title>
</head>
<body>
    <form method="post" action="controleur.php">
      <input type="text" name="nombre" placeholder="saissir ici le nombre"></input>
    <button type="submit" name="valide">valider</button>

    </form>
</body>
</html>
<!-- Exercice 10 : Le nombre N est saisi à l’aide d’un formulaire 
et on génère les N champs inputs . N est positif. -->
<?php  
    include_once("fonction.php");
    session_start();

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
        <div class="erreur">
            <?php 
            if(isset($_SESSION["erreur"])){
                echo $_SESSION["erreur"];
            }
            ?>
        </div>
        <button type="submit" name="valide">valider</button>
    </form>

    <button><a href="../exercice9/index.php">précedant</a></button>
    <button><a href="../exercice11/index.php">fin</a></button>
 <div>
    <?php 
if(isset($_SESSION["post"])){
    siChampsValide($_SESSION["post"]["nombre"]);
}

    ?>
 </div>
</body>
</html>
<?php
 if(isset($_SESSION["post"]) or isset($_SESSION["erreur"])){
     unset($_SESSION["post"]);
     unset($_SESSION["erreur"]);
 }

?>
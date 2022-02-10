<!-- Exercice 8: Entrer un  nombre N à
 l’aide d’un formulaire puis générer
  une liste ul dont les li affichent toutes
 les valeurs entre 1 et N . N est positif. -->
 <!DOCTYPE html>
 <html lang="fr">
 <head>
     <meta charset="UTF-8">
     
     <title>exercice8</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
            
     <section>
         <form method="post" action="controleur.php">
             <h3><label for="">nombre N positif</label>
             <input type="text" placeholder="le nombre N" name="nombre">
             <button type="submit" name="rechercher">envoyer</button>
         </form>
     </section>
     
 </body>
 </html>
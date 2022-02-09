<!-- Exercice 7 : Entrer une date (jour/mois/année) 
à l’aide d’un formulaire ,puis déterminer 
et afficher  la date suivante et la date précédente.
Le champ est obligatoire et la date est valide. -->

<?php
    function dateValide($date):bool{
        return is_numeric($date);
        
    }
    

?>
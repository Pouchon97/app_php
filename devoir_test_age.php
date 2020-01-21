<?php

$age_personne=Readline(" Bienvenue dans notre petit programme d'autorisation pour le voyage. Entrez votre age:");
if($age_personne>=3 and  $age_personne<=12)
{
    echo("$age_personne ans oh non, désolé car vous être un enfant");
}
elseif($age_personne>=13 and $age_personne<=17){
    echo("$age_personne ans désolé car Vous être  mineur");
}
elseif($age_personne>=18 and $age_personne<=54){
}
elseif($age_personne>=55){
    echo(" $age_personne ans ah oui, Vous être  majeur");
}

?>
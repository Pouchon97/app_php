<?php
$age_personne=Readline("Entrez votre age SVP :");

switch($age_personne){
    case $age_personne >=3 && $age_personne<=12 :
        echo("Enfant");
     break;
    case $age_personne>=13 and $age_personne<=17 :
        echo("Mineur");
        break;
    case $age_personne>=18 and $age_personne<=54 :
        echo("Majeur");
        break;
     case $age_personne>=55 :
        echo("Agée");
}
?>
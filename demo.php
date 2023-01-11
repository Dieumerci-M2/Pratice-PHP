<?php

// Exemple des condions avec Switch case

// Essayons avec une petite application qui nous donnera un pourcentage lorsque nous entrons une lettre mentionnée à notre à notre certificat

$mention = readline("Entrez votre lettre : \n");

switch(strtoupper($mention)){
    case "A" : 
        echo "vous avez 90% \n";
        break;
    case "B" : 
        echo "Vous avez 80% \n";
        break;
    case "C" : 
        echo "Vous avez 70% \n";
        break;
    case "D" : 
        echo "Vous avez moins de 60% Il vas falloir que vous fournissiez plus defforts \n";
        break;
    default:
        echo "nous avons pas de pourcentage lié à cette lettre veuillez saisir la bonne lettre \n";
        break;
    }
?>
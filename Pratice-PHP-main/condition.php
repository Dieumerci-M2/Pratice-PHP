
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

// Exemple avec la condition if else

// Comme deuxième exemple nous allons faire une application qui nous retourneras une mention en entrant un pourcentage

$pourcentage =  (int)readline('Entrer un pourcentage : ');

if(0 < $pourcentage && $pourcentage <= 39){
    echo "Vous avez la mention naff \n";
}
elseif(40 <= $pourcentage && $pourcentage <= 49){
    echo "Vous avez la mention Ajournée \n";
}
elseif(50 <= $pourcentage && $pourcentage <= 69){
    echo "Vous avez la mention Satisfaction \n";
}
elseif(70 <= $pourcentage && $pourcentage <= 79){
    echo "Vous avez la mention Distinction \n";
}
elseif(80 <= $pourcentage && $pourcentage <= 89){
    echo "Vous avez la mention Grande Distinction \n";
}
elseif(90 <= $pourcentage && $pourcentage <= 99){
    echo "Vous avez la mention Très Grande Distinction \n";
}
else{
    echo "Vous pouvez pas avoir un pourcentage moins que 1 et plus que 99 \n";
}

?>




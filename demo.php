
<?php

$notes = [10, 15, 20,[3,4]];

// Afficher 4 

echo $notes[3][1] ;

$eleve = [
    'nom' => 'Dieme',
    'prenom' => 'Md',
    'notes' => [12, 10, 15]
];

// Afficher le prenom

echo $eleve['prenom'] ;

$eleve = [
    'nom' => 'Dieme',
    'prenom' => 'Md',
    'notes' => [12, 10, 15]
];

// Afficher les notes de leleve

print_r($eleve['notes']);

// Afficher le nom de leleve et ses notes

echo $eleve['nom'] . ' ' . print_r($eleve['notes']);

$eleves = [
    [
        'nom' => 'Dieme',
        'prenom' => 'Md',
        'notes' => [10, 12, 15]
    ],
    [
        'nom' => 'dk',
        'prenom' => 'secko',
        'notes' => [12, 21, 32]
    ]
];

// Afficher le nom et la troisième note du second eleve

echo $eleves[1]['nom'] . ' ' . print_r($eleves[1]['notes'][2]);


<!-- LES VARIABLES -->

<?php

$nom = 'Md';
$note1 = 10;
$note2 = 20;
echo "salut ". $nom ." vous avez eu ". ($note1+$note2)/2 . " comme moyenne\n";


<?php

// Pour comprendre bien les boucles : je me suis donner un petit exercices de dire à un élève de tapez ces notes sur le clavier et en suite tapez fin pour finir la saisir. Et après ça mon algorithme lui montreras tout ce qu'il a tapez au clavier dans un tableau. 

// creation de deux variables; un tableaux pour afficher toutes les notes et une variable pour stoker les inputs tant que la condition n'est pas remplie.

$notes = [];
$input = null;

// la boucle while qui signfie en français "Tant que"; la synthaxe ci-dessous veule simplement dire : tant que cette conditon () n'est pas remplis alors fait ceci {}

while($input !== 'fin'){

    // La fuction readline nous aide à entrez nos données au clavier; tout ceux que nous entrerons au clavier serons stockés dans la variable input.

    $input = readline('Entrez une note ou tapez fin pour terminer :');

    // Si la valeur que nous tapons aux clavier et différente du mot 'fin' () alors fait ceci {} 

    if($input !== 'fin'){
        $notes[] = (int)$input;
    }
};

// La boucle Foreach c'est un autre moyen simple de parcourir un tableau.

foreach($notes as $note){
    echo "-$note\n";
}
?>

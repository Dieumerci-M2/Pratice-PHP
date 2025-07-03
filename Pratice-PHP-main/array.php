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
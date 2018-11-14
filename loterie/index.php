<?php
/*Loterie
Enoncé

Nous avons décidé d'organiser une loterie virtuelle ! Pour cela nous devons développer un programme capable d'effectuer un tirage. Un tirage est une suite de 6 nombres distincts (pas de doublons) ordonnés de manière croissante, générés aléatoirement et compris entre 1 et 49.

Ce tirage sera ensuite affiché sur une page web. 


Conseils
Procéder par petites étapes et tester chaque étape au fur-et-à-mesure, par exemple :

     Commencer par générer 1 nombre aléatoire compris entre 1 et 49  (peut-être existe-t-il une fonction en PHP qui répond à ce besoin)   
     Générer ensuite 6 nombres aléatoires compris entre 1 et 49
     Trouver un moyen d'éviter les doublons
     Trier les 6 numéros
     Afficher le tirage dans le code HTML

Créer des fonctions

PHP permet bien sûr la création de fonctions !

Même lorsqu'il n'y a pas de répétition de code, il peut être intéressant de structurer son code en créant des fonctions pour l'organiser de manière logique ! Cela permettra également de le tester plus facilement !*/

const NUMBER_COUNT = 6; // Représente le nombre de nombres entiers qu'on veut pour le tirage
const MIN_BOUND = 1;
const MAX_BOUND = 49;


function tirage()
{
$loterie =[];
// tirage de la loterie

 while(count($loterie) < NUMBER_COUNT){ // tant que l'on a pas 6 chiffres dans le tableau 
    $nbRandom = rand(MIN_BOUND,MAX_BOUND);// on génère un nombre aleatoire entre 1 et 49
    if( !in_array($nbRandom, $loterie)){ // si le nombre n'est 'pas' déjà dans le tableau
        array_push($loterie, $nbRandom);// on rajoute le nombre dans le tableau
    }

}
// tri du tableau : les nombres en ordre croissant

sort($loterie);

return $loterie;
//var_dump($loterie);
}
$loterie = tirage(); 
// affichage du tirage

/*for($i = 0; $i < count($loterie); $i++ ){
    echo  $loterie[$i] . "<br>";
}*/
  // inclusion de la vue

  include("index.phtml");
?>
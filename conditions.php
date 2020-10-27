<?php

/*
Une condition vérifie la validité d'une opération/instruction afin de réaliser des actions/opérations. 
Pour réaliser une condition, on va utiliser une structures de contrôle => à savoir ici le mot-clé IF

Pour vérifier la validité d'une opération/instruction, je vais utiliser les opérateurs de comparaison

 < est égal à inférieur à
 exemple : 10 < 20 = vrai
 
 > est égal à supérieur à 
 exemple : 50 > 40 = vrai 
 exemple 40 > 50= faux 

 <= est égal à inférieur ou égal
 exemple : 142 <= 31 = faux

 >= est égal à supérieur ou égal 
 exemple 40 >= 35 = vrai

 == est égal à égal 
 exemple 40 == 40 = vrai

*/

$condition = false;

if ($condition) {
    echo "Bonjour";
} else {
    echo "Bonsoir";
};
echo '<br>';
if (5 < 3){
    echo "Je vais bien merci";
} else {
    echo "J'aime le chocolat";
};
echo '<br>';

if (40 == 40) {
    echo "J'aime le week-end";
} else {
    echo "Je n'aime pas les lundis";
};
echo '<br>';
$orange = "orange";
$cerise = "cerise";
$banane = "banane";
$pomme = "pomme";
$maturite = 3;
$maceration = 12;

if ($maturite == 3) {
    echo "C'est bientôt le moment de récolter les fruits";
} elseif ($maturite > 12) {
    echo "Attention il ne faut pas laisser pourrir les fruits sur l'arbre";
} elseif ($maturite > 6) {
    echo "Les fruits sont maintenant pourris";
} elseif ($maceration > 12) {
    echo "C'est l'heure de goûter la petite liqueur";
} else {
    echo "On verra bien";
};

/*
Une autre façon d'écrire ceci, avec les opérateurs logiques. Exemple : OR et AND
*/
echo '<br>';

if ($maturite == 3 || $maturite > 12 || $maturite > 6) {
    echo "On va préparer une petite fête pour picoler";
} else {
    echo "Zut c'est le confinement on ne peut pas sortir";
}

echo '<br>';

if ($maturite == 3 && $maturite < 12) {
    echo "On va préparer une petite fête pour picoler";
} else {
    echo "Zut c'est le confinement on ne peut pas sortir";
};

echo '<br>';
if ($maceration >= 12 xor $maceration < 25) {
    echo "J'aime les fruits";
} else {
    echo "Je n'aime pas les fruits";
}

echo '<br>';

if (!($maceration == 12)){
    echo "Je ne suis pas inspirée";
} else {
    echo "J'aime les exemples";
};

?>
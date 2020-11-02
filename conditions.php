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


echo '<br>';
// quelques fonctions utiles à connaître et à utiliser

// empty : vérifie si la valeur contenue dans ma variable est vide ou indéfinie;

$age = 15;

if (empty($age)){
    echo "attention, vous n'avez pas renseigné votre âge";
} else {
    echo "Vous avez ".$age." ans.";
};

// isset permet de vérifier si la variable est définie
echo "<br>";

//$prenom = "Mathilde";

if (isset($prenom)) {
    echo "Ma variable a bien été définie";
} else {
    echo "attention cette variable n'existe pas";
};

// Qu'est-ce que l'opérateur ternaire ? Dans la réalité, on se retrouve souvent à définir une variable en fonction d'un test ou bien de déclencher des actions en fonction d'un test c'est-à-dire d'une condition

// Par exemple, quelle heure est-il ?
echo '<br>';
$heure = 12;

// S'il est moins de 20h, je suis en forme, sinon je suis fatiguée

$etat = $heure < 20 ? 'je suis en forme' : 'je suis fatiguée';
echo $etat ;

/*Les boucles nous permettent d'exécuter une MEME série d'instructions plusieurs fois. Par exemple si j'ai envie d'écrire 20 <li> avec html je suis obligé de faire du copié-collé (ou emmet mais du coup ça va beaucoup plus vite), avec PHP je vais pouvoir les générer beaucoup plus rapidement.

Nous avons le for, le while et le foreach

FOR 

Afficher les nombre de 1 à 99

En java 
for (int i=1; i < 100 ; i++) {
    system.out.print(i);
}
EN PHP
*/
echo '<br>';
for ($i = 1 ; $i < 100 ; $i++) {
    echo $i;
    echo "<br>";
}

/* Dans une boucle de type for, j'ai donc mes 3 instructions essentielles : 
for (initialisation, condition, incrementation)
*/

/* la boucle while permet de boucler tant que la condition définie dans le while est vrai. Tant qu'elle est vraie on boucle, dès qu'elle est fausse, la boucle s'arrête. */

$economies = 0;

while ($economies < 100) {
    $economies+=10;
    echo "Je continue de travailler";
    echo '<br>';
}
echo "J'ai suffisamment d'économies";

// La boucle do-while La principale différence par rapport à la boucle while est que la première itération de la boucle do-while est toujours exécutée (l'expression n'est testée qu'à la fin de l'itération), ce qui n'est pas le cas lorsque vous utilisez une boucle while (la condition est vérifiée dès le début de chaque itération, et si elle s'avère FALSE dès le début, la boucle sera immédiatement arrêtée).
echo '<br>';
$i = 5;
do {
    echo $i;
} while ($i > 9);

$fruits = ["cerise", "banane", "pomme", "kiwi", "citrons"];

// Ici via mon foreach ma boucle est passée sur chacun des éléments de mon tableau et je lui ai demandé d'afficher la valeur de ces éléments 

foreach($fruits as $fruit){
    echo $fruit.'<br>';
};

$fruits = [
    "rouge" => "cerise", 
    "jaune" => "banane", 
    "ronde" => "pomme", 
    "vert" => "kiwi", 
    "jauneouvert" => "citrons"
];

// Ici en utilisant foreach j'ai à la fois récupéré la valeur de mon élément dans le tableau et la valeur de sa clé associée.

foreach($fruits as $index => $fruit) {
    echo "le ".$fruit." c'est ".$index."<br>";
}

// Je définis une fonction 

function HelloWorld() {
    $message = "Hello World";
    echo $message; 
};

HelloWorld();

function surface(int $largeur, int $longueur){
    $surface = $largeur*$longueur;
    return $surface;
};

$surfaceCarré = surface(10,15);
var_dump($surfaceCarré);

$surfaceCarré2 = surface(12, 18);
var_dump($surfaceCarré2);  

function perimetre(int $largeur, int $longueur){
    $perimetre = 2 * ($largeur+$longueur);
    return $perimetre;
};

$calculperimetre = perimetre(5,10);
var_dump($calculperimetre);


function doCoffee(string $water, string $coffeeSeeds) {
    $cupOfCoffee = "Une tasse de ". $water ." avec ". $coffeeSeeds;
    return $cupOfCoffee;
};

$tasseDeCafe = doCoffee("eau", "arabica");
var_dump($tasseDeCafe);

?>
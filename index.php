<h1>Salut on découvre PHP</h1>

<?php 

// J'affiche un commentaire sur une seule ligne

/*
Je suis un
commentaire sur 
plusieurs lignes, youppppiiii
*/

// J'affiche un texte 
echo 'Coucou je suis du php';

// J'affiche du code HTML
echo '<h2>Coucou je suis du code html généré par php</h2>';

// Une variable c'est une case, une boîte, de mémoire, où l'on va stocker une information, une donnée.
// exemple de données scalaires

$prenom = "Juliette";

echo $prenom;

$age = 18;
echo '<br>';
echo $age;

$price = 15.99;

$dicton = true ;
$error = false ;

// exemple de constante

define("MON_ANIMAL_PREFERE", "le chien");
define("MON_AGE", 34);

echo '<br>';
echo MON_ANIMAL_PREFERE;
echo '<br>';
echo MON_AGE;
// var_dump() permet d'afficher le type de donnée et sa valeur
var_dump($price);

/*les données composées permettent de stocker plusieurs données scalaires 

Exemple les tableaux simples (array)

Les tableaux servent à stocker plusieurs données/informations dans une même variable
*/

$fruits = ["cerise", "banane", "pomme", "kiwi", "citrons"];

/* 
Attention echo permet d'afficher des données scalaires mais pas des données composées, dès lors écrire echo $fruits me renvoie une erreur de type array to string conversion. Dans ce cas, j'utilise var_dump pour voir le type et le contenu de ma donnée.
*/
var_dump($fruits);

// un exemple de fonction qui permet de rajouter une donnée dans un tableau. 
array_push($fruits, "poires");
$fruits[] = "framboise";

var_dump($fruits);

var_dump($fruits[5]);

echo $fruits[5];

/*
L'index d'un tableau, s'il n'est pas spécifié commence toujours à 0.
Néanmoins si on le souhaite, on peut soi-même définir les valeurs de l'index d'un tableau.
*/
// Ceci s'appelle un tableau associatif

$fruits = [
    "rouge" => "cerise", 
    "jaune" => "banane", 
    "ronde" => "pomme", 
    "vert" => "kiwi", 
    "jauneouvert" => "citrons"
];

var_dump($fruits);
echo $fruits["ronde"];

$fruits["vertorange"] = "mangues";

var_dump($fruits);


/* Une autre manière (plus ancienne) de déclarer son tableau :
$fruits = array("cerise", "banane", "pomme", "kiwi");
*/



/* Les données contenues dans les variables peuvent être de différentes natures / types.

Les données scalaires (contient une seule valeur)

string = chaîne de caractère
int = un nombre entier
float = un nombre décimal
boolean = vrai ou faux

Les constantes. Une constante ne peut jamais être modifiée pendant l'exécution d'un script. Par convention, les constantes sont toujours definis en majuscule. 

Les données composées (plusieurs valeurs scalaires)

array = tableau

*/



?>

<h2>Ici je suis bien en html</h2>
<?php

$titre = "Salut ca a changé";
$titreDeux = "Je suis le titre 2";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J'écris du php dans du html</title>
</head>
<body>
  <h1><?php echo $titre ;?></h1>
  <h2><?= $titreDeux ;?></h2>  
</body>
</html>
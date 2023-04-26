<?php

require_once "controller.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <titre>Mon Blog </titre>
</head>
<header>
    <h1><a href="index.php">Mon blog</h1>
    <p>Bienvenue dans mon blog</p>
</header>

<?php
//affichage des articles
foreach ($articles as $article) : ?>
    <h2><?= $article->title ?></h2>
    <time><?= $article->release_date ?></time>
<?php endforeach; ?>

<footer>
    <p>Créé par Sylvie L.</p>
</footer>

</html>
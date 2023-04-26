<?php
function getArticles()
{
    $bdd = new PDO('mysql:host=localhost;dbname=miniblog;charset=utf8', 'IgrisModz', 'DarknModder59!');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $bdd->query("select id,title, release_date from article order by id desc");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}

$articles = getarticles();
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
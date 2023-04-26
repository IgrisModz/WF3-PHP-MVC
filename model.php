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

?>
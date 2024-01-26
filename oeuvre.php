<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php include('header.php'); ?>
<main>
    <?php if (isset ($_GET['id']))?>
    <?php include('oeuvres.php');
    foreach ($oeuvres as $oeuvre) {
        if ($oeuvre['id'] === $_GET['id']) {
            echo'<article id="detail-oeuvre">';
            echo'<div id="img-oeuvre">';
            echo'<img src"' .$oeuvre['image']. '';
            echo'</div>';
            echo'<div id="contenu-oeuvre">';
            echo'<h1>' .$oeuvre['titre']. '</h1>';
            echo'<p class="description">' .$oeuvre['description']. '</p>';
            echo'<p class="description-complete">' .$oeuvre['description-complete']. '</p>';
            echo'</div>';
            echo'</article>';
        }
    }?>
</main>
<?php include('footer.php'); ?>
</body>
</html>

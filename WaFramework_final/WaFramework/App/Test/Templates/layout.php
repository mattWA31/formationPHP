<!DOCTYPE html>
<html>
<head>
    <title>
        <?= isset($title) ? $title : 'Mon site'; ?>
    </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/WaFramework/css/style.css" type="text/css" />
</head>

<body>

<div id="wrap">

    <header>
        <h1><a href="accueil">Mon super site</a></h1>
        <p>Comment ca, il n'y a presque rien ?</p>
    </header>

    <nav>
        <ul>
            <li><a href="accueil">Accueil</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="listuser">Lister les utilisateurs</a></li>
            <li><a href="createuser">Créer un utilisateur</a></li>
        </ul>
    </nav>

    <div id="content-wrap">
        <section id="main">
            <?= $content ?>
        </section>
    </div>

    <footer></footer>

</div>
</body>
</html>
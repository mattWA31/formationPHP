<!DOCTYPE html>
<html>
<head>
    <title>
        <?= isset($title) ? $title : 'Mon super site' ?>
    </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/phpFramework2/css/style.css" type="text/css" />
</head>

<body>

<div id="wrap">

    <header>
        <h1><a href="accueil.html">Mon super site</a></h1>
        <p>Comment ça, il n'y a presque rien ?</p>
    </header>

    <nav>
        <ul>
            <li><a href="accueil.html">Accueil</a></li>
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
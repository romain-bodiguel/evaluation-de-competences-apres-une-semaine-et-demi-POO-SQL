<?php
include('../inc/functions.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Parcours PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,500i" rel="stylesheet" />
    <link rel="stylesheet" href="../css/base.min.css" />
</head>

<body>
    <header id="header">
        <h1 id="title">Le parcours
            <i>🔥</i>
            <span>POO & Base de données</span>
        </h1>
    </header>
    <nav id="nav"></nav>
    <main id="main">
        <div class="section-title">Mario PHP</div>
        <section class="section">
            <article class="exo">
                <div class="summary">
                    <div class="category">Mario PHP</div>
                    <h2>Mario Comes To Life</h2>
                    <p>Construct me</p>
                </div>
                <div class="info">
                    <h3>Notions</h3>
                    <span class="tag">class</span>
                    <span class="tag">instance</span>
                    <span class="tag">constructor</span>
                </div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="http://php.net/manual/fr/language.oop5.basic.php#language.oop5.basic.class">Les classes en PHP</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://php.net/manual/fr/language.oop5.basic.php#language.oop5.basic.new">Créer une instance en PHP</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor">Constructeur d'une classe en PHP</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="exo">
                <div class="summary">
                    <div class="category">Mario PHP</div>
                    <h2>Please Respect My Privacy</h2>
                    <p>I don't want my lives to be public</p>
                </div>
                <div class="info">
                    <h3>Notions</h3>
                    <span class="tag">visibility</span>
                    <span class="tag">properties</span>
                    <span class="tag">methods</span>
                </div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="http://php.net/manual/fr/language.oop5.visibility.php">Visibilité</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://php.net/manual/fr/functions.returning-values.php">retourner une valeur</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="exo">
                <div class="summary">
                    <div class="category">Mario PHP</div>
                    <h2>Bowser Is Coming</h2>
                    <p>I'm the bad guy and Mario will take hits !</p>
                </div>
                <div class="info">
                    <h3>Notions</h3>
                    <span class="tag">operators</span>
                    <span class="tag">methods</span>
                </div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="https://secure.php.net/manual/fr/language.operators.arithmetic.php">opérateurs arithmétiques</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="exo">
                <div class="summary">
                    <div class="category">Mario PHP</div>
                    <h2>Luigi To The Rescue</h2>
                    <p>Thank you my plumber friend</p>
                </div>
                <div class="info">
                    <h3>Notions</h3>
                    <span class="tag">class</span>
                    <span class="tag">properties</span>
                    <span class="tag">constructor</span>
                    <span class="tag">methods</span>
                    <span class="tag">concatenate</span>
                </div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="https://secure.php.net/manual/fr/language.operators.string.php">opérateur de concaténation</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://php.net/manual/fr/functions.returning-values.php">retourner une valeur</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="exo bonus">
                <div class="summary">
                    <div class="category">Mario PHP</div>
                    <h2>Full Mario!</h2>
                    <p>Let's make a complete Super Hero</p>
                </div>
                <div class="info">
                    <h3>Notions</h3>
                    <span class="tag">class</span>
                    <span class="tag">properties</span>
                    <span class="tag">methods</span>
                    <span class="tag">constructor</span>
                </div>
            </article>
            <article class="exo">
                <div class="summary">
                    <div class="category">Base de données</div>
                    <h2>Quiz</h2>
                </div>
                <div class="info">
                    <h3>Notions</h3>
                    <span class="tag">table</span>
                    <span class="tag">champs</span>
                    <span class="tag">types de champ</span>
                    <span class="tag">clé primaire</span>
                    <span class="tag">auto-incrémentation</span>
                    <span class="tag">clé étrangère</span>
                    <span class="tag">SQL</span>
                </div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="https://sql.sh/cours/select">SQL SELECT</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://sql.sh/cours/where">SQL WHERE</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://dev.mysql.com/doc/refman/8.0/en/select.html">Doc MySQL - SELECT</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="exo bonus">
                <div class="summary">
                    <div class="category">PDO PHP</div>
                    <h2>Super Mario VS PDO!</h2>
                    <p>Let's play with Mario DB</p>
                </div>
                <div class="info">
                    <h3>Notions</h3>
                    <span class="tag">database</span>
                    <span class="tag">pdo</span>
                    <span class="tag">sql</span>
                </div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="https://sql.sh/cours/select">SQL SELECT</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://sql.sh/cours/where">SQL WHERE</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.php.net/manual/fr/pdo.connections.php">Connexion PDO</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.php.net/manual/fr/pdo.query.php">Exécuter une requête avec query</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.php.net/manual/fr/pdo.exec.php">Exécuter une requête avec exec</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.php.net/manual/fr/pdostatement.fetch.php">Récupérer un résultat à la fois</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.php.net/manual/fr/pdostatement.fetchall.php">Récupérer tous les résultats d'un coup</a>
                        </li>
                    </ul>
                </div>
            </article>
        </section>

    </main>
    <footer id="footer">
        <p>
            <strong>Besoin d'aide ?</strong> Direction les
            <a href="https://kourou.oclock.io/ressources/fiches-recap/">
                <i>📚</i> Fiches recap</a>
        </p>
        <p>O'clock</p>
    </footer>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>

<?php
error_reporting(E_ALL & ~E_NOTICE);

require_once 'datas.php';

function insertData(){
    $_SESSION['dirty_strings'] = [
        'je suis gentil@pirate',
        'https://secure.php.net/manual/fr/function.filter-var.php',
        'allo@service.fr',
        'http://test.com',
        'marc.quisuisje.fr',
        'http:localhost/production/index.html',
        'bouclier.man@herocorp.com',
        'http://oclock.io',
        'mauvais@email',
        'bon@email.fr',
        'http:mauvaise.url',
        'http://bonneurl.com',
    ];
}

function cleanData() {
    unset(
        $_SESSION['clean_urls'],
        $_SESSION['clean_emails']
    );
}

function check($exo, $fn=null) {
    $result = false;
    $content = '';
    switch ($exo) {
        case 1:
            list($result, $content) = checkExo1();
            break;
        case 2:
            list($result, $content) = checkExo1();
            
            if ($result) {
                $mario = new Mario();
                list($result, $content) = checkExo2($mario);
            }
            break;
        case 3:
            list($result, $content) = checkExo1();
                
            if ($result) {
                $mario = new Mario();
                list($result, $content) = checkExo2($mario);
                
                if ($result) {
                    list($result, $content) = checkExo3($mario);
                }
            }
            break;
        case 4:
            list($result, $content) = checkExo4();
                    
            if ($result) {
                $mario = new Hero('Mario');
                list($result, $content) = checkExo2($mario);
                
                if ($result) {
                    list($result, $content) = checkExo3($mario);
                }
            }
            break;
        case 7:
            list($result, $content) = checkExo7();
            break;
    }
    displayExo($exo, $result, $content);
}
function checkExo1() {
    $result = false;
    $content = '';
    if (class_exists('Mario')) {
        $mario = new Mario();
        if (property_exists($mario, 'lives')) {
            if (method_exists($mario, 'getLives')) {
                $livesValue = $mario->getLives();
            } else {
                $livesValue = $mario->lives;
            }

            if ($livesValue === 3) {
                $result = true;
            }
            else if ($livesValue == 3) {
                $content = 'Le type pour la propriété "lives" doit être un integer';
            }
            else {
                $content = 'Le nombre de vies n\'est pas initialisé à 3';
            }
        }
        else {
            $content = 'La propriété n\'existe pas dans la classe';
        }
    }
    else {
        $content = 'La classe n\'existe pas';
    }
    return [$result, $content];
}
function checkExo2($mario) {
    $result = false;
    $content = '';
    $nbProperties = count(get_class_vars(get_class($mario)));
    if (is_a($mario, 'Mario') && $nbProperties === 0 || is_a($mario, 'Hero')) {
        if (method_exists($mario, 'getLives')) {
            if ($mario->getLives() === 3) {
                $result = true;
            }
            else {
                $content = 'Le nombre de vies n\'est pas initialisé à 3';
            }
        }
        else {
            $content = 'La méthode getLives n\'existe pas';
        }
    }
    else {
        $content = 'La propriété est toujours publique';
    }
    
    return [$result, $content];
}
function checkExo3($mario) {
    $result = false;
    $content = '';
    
    if (method_exists($mario, 'takeHit')) {
        if (method_exists($mario, 'up')) {
            if ($mario->getLives() === 3) {
                $mario->takeHit();
                if ($mario->getLives() === 2) {
                    $mario->up();
                    if ($mario->getLives() === 3) {
                        $mario->takeHit();
                        $mario->takeHit();
                        if ($mario->getLives() === 1) {
                            $mario->up();
                            $mario->up();
                            $mario->up();
                            $mario->up();
                            if ($mario->getLives() === 5) {
                                $result = true;
                            } else {
                                $content = 'La méthode up n\'a pas le fonctionnement attendu';
                            }
                        } else {
                            $content = 'La méthode takeHit n\'a pas le fonctionnement attendu';
                        }
                    } else {
                        $content = 'La méthode up n\'a pas le fonctionnement attendu';
                    }
                } else {
                    $content = 'La méthode takeHit n\'a pas le fonctionnement attendu';
                }
            } else {
                $content = 'Le nombre de vies n\'est pas initialisé à 3';
            }
        } else {
            $content = 'La méthode up n\'existe pas';
        }
    } else {
        $content = 'La méthode takeHit n\'existe pas';
    }
    
    return [$result, $content];
}
function checkExo4() {
    $result = false;
    $content = '';
    
    if (class_exists('Hero')) {
        $luigi = new Hero('Luigi', 'green');
        $mario = new Hero('Mario', 'red');
        $peach = new Hero('Peach', 'pink');

        if (property_exists($mario, 'lives')) {
            if (method_exists($mario, 'hello')) {
                if ($mario->hello() === "It's me, Mario!" && $luigi->hello() === "It's me, Luigi!" && $peach->hello() === "It's me, Peach!") {
                    $result = true;
                }
                elseif ($mario->hello() === "It's me, Mario!" && $luigi->hello() === "It's me, Luigi!" && $peach->hello() !== "It's me, Peach!") {
                    $content = 'Si tu dois créer les personnages Toad, Bowser, Koopa et Yoshi, tu vas aussi faire une condition pour chacun ? Il y a plus simple à faire ;).';
                }
                else {
                    $content = 'La méthode hello n\'a pas le comportement attendu';
                }
            }
            else {
                $content = 'La méthode hello n\'existe pas';
            }
        }
        else {
            $content = 'La propriété n\'existe pas dans la classe';
        }
    }
    else {
        $content = 'La classe n\'existe pas';
    }
    
    return [$result, $content];
}
function checkExo7() {
    $result = false;
    $content = '';
    global $pdo, $yoshi, $heroes;

    if (isset($pdo)) {
        if (isset($yoshi)) {
            if (!is_array($yoshi)) {
                $content .= 'La variable $yoshi n\'est pas un array<br>';
            } else {
                if (isset($yoshi[0])) {
                    $content .= 'Le tableau $yoshi ne semble pas respecter le format demandé dans l\'énoncé<br>';
                } elseif (!isset($yoshi['name']) || $yoshi['name'] !== 'Yoshi' || !isset($yoshi['color']) || $yoshi['color'] !== 'green' || !isset($yoshi['lives']) || !isset($yoshi['big']) || !isset($yoshi['star'])) {
                    $content .= 'Le tableau $yoshi ne semble pas contenir toutes les informations nécessaires<br>';
                }
            }
        } else {
            $content .= 'La variable $yoshi n\'existe pas<br>';
        }
        if (isset($heroes)) {
            if (!is_array($heroes)) {
                $content .= 'La variable $heroes n\'est pas un array<br>';
            }
        } else {
            $content .= 'La variable $heroes n\'existe pas<br>';
        }
        $peach = $pdo->query("SELECT name FROM heroes WHERE name = 'Princess Peach';")->fetch();
        if(!$peach) {
            $content .= 'Princess Peach n\'a pas été inserée en base.<br>';
        }
        if (empty($content)) {
            $result = true;
        }
    }
    else {
        $content = 'La variable $pdo n\'existe pas';
    }
    
    return [$result, $content];
}
function isSecretCode($code) {
     return $code === NBTOFIND;
}
function displayResult($bool, $id, $content='') {
    if ($bool) {
        echo '<section id="test" class="success">'.$content.'</section>';
    }
    else {
        echo '<section id="test" class="error">'.$content.'</section>';
    }
}

function displayHtml($data, $result, $content='') {
    global $datas;
    $id = $data['id'];
    ?><!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <title>Le Parcours PHP - Exo <?= $id ?> : <?= $data['title'] ?></title>
            <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,500i" rel="stylesheet" />
	           <link rel="stylesheet" href="../css/base.min.css" />
        </head>
        <body>
            <header id="header">
        		<h1 id="title">Le parcours
        			<i>🔥</i>
        			<span>PHP</span>
        		</h1>
        	</header>
        	<nav id="nav"></nav>
            <main id="main">
		<div id="epreuve">
			<div class="summary">
                <h2><?= $data['title'] ?></h2>
                <p><?= $data['subtitle'] ?></p>
                <?php echo isset($data['desc']) ? $data['desc'] : '' ?>
			</div>
		</div>

		<?php displayResult($result, $id, $content) ?>

	</main>

	<footer id="footer">
		<p>
			<strong>Besoin d'aide ?</strong> Direction les
			<a href="https://kourou.oclock.io/ressources/fiches-recap/">
				<i>📚</i> Fiches recap
			</a>
		</p>
		<p>O'clock</p>
	</footer>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/app.js"></script>

        </body>
    </html>
    <?php
}

function displayExo($exo, $result, $content='') {
    global $datas;
    displayHtml($datas[$exo], $result, $content);
}

function random($min, $max) {
  return rand($min, $max);
}
/* Exo 7 */
define('NBTOFIND', random(0, 1000));

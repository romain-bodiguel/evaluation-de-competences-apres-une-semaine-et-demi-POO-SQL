<?php
require_once '../inc/functions.php';

/*
 * Exo 5 : Full Mario!
 *
 * Add these to the Hero class:
 *  - A favorite color.
 *  - To be able to grow when eat a mushroom. Shrink instead of die when taking a hit.
 *  - To be able to be invicible when eat a star.
 *
 * See tests at the bottom of this file for more info :)
 * 
 * Don't panic, this time, there will be a lot of Fatal Errors until you finish this "exo"
 */

// ---------------------------------------------------------------------------
//! /!\ WARNING /!\
// - you ONLY need to write a class definition
// - you DON'T need to create objects
// - you DON'T need to use 'echo' except if explicitly required
// - you DON'T need to dump the vars to make your code work
//      but you can still dump them temporarily
//      and remove your dumps when your code is ok
// - you DON'T need to copy the given code example
// - your code will be checked and validated automatically
// ---------------------------------------------------------------------------

// ------------------------
// START OF YOUR CODE
// ------------------------

class Hero {
    // je lui donne une propriété $lives, $color et $size
    private $name;
    private $color;
    private $lives;
    private $size;

    // je crée une fonction __construct qui initialise sa valeur par défaut à 3, et laisse la couleur vide
    public function __construct($name = "", $color = "", $lives = 3, $size = 1) {
        $this->name = $name;
        $this->color = $color;
        $this->lives = $lives;
        $this->size = $size;
    }

    // je crée une méthode hello() qui retourne le nom du héros
    public function hello() {
        $heroeName = $this->name;
        return 'It\'s me, '.$heroeName.'!';
    }

    // je crée une fonction getColor qui récupère la couleur du héros
    public function getColor() {
        return $this->color;
    }

    // je crée une méthode qui incrémente le nombre de vie
    public function up() {
        $lives = $this->lives++;
        return $lives;
    }

    // je crée une méthode qui décrémente le nombre de vie, ou rétrécit la taille si celle-ci est supérieure à 1
    public function takeHit() {
        if($this->size > 1) {
            return $this->size--;
        } else {
            return $this->lives--;
        }
    }

    // je crée une méthode getLives qui retourne le nombre de vies (la valeur de $lives)
    public function getLives() {
        return $this->lives;
    }

    // je crée une fonction eatMushroom qui grossit sa taille de 1 quand il mange un champignon
    public function eatMushroom() {
        return $this->size++;
    }

    // je crée une fonction isBig qui vérifie si la taille du héros est supérieure à sa taille de base (1)
    public function isBig() {
        if($this->size > 1) {
            return true;
        } else {
            return false;
        }
    }

    // je crée une fonction hasStar qui lui donne une étoile d'immortalité
    public function hasStar() {
        $this->lives = INF;
    }
}

// ------------------------
// END OF YOUR CODE
// ------------------------

/*
 * Tests
 * Pas touche !
 */
$mario = new Hero('Mario', 'red');
$test = (
    $mario->getColor() === 'red'
    && $mario->isBig() === false
    && $mario->hasStar() === false
    && $mario->getLives() === 3
);
if ($test) {
    $mario->takeHit();
    $test = $mario->getLives() === 2;
    if($test){
        $mario->up();
        $mario->eatMushroom();
        $test = $mario->isBig() === true;
        if ($test) {
            $mario->takeHit();
            $test = (
                $mario->isBig() === false
                && $mario->getLives() === 3
            );
            if ($test) {
                $mario->receiveStar();
                $test = $mario->hasStar() === true;
                if ($test) {
                    $mario->takeHit();
                    $mario->takeHit();
                    $mario->takeHit();
                    $test = $mario->getLives() === 3;
                    
                    if($test){
                        $mario->eatMushroom();
                        $mario->takeHit();
                        $mario->takeHit();
                        $mario->up();
                        $mario->vanishStar();
                        $test = (
                            $mario->getLives() === 4
                            && $mario->hasStar() === false
                            && $mario->isBig() === true
                        );
                    }
                }
            }
        }
    }
}
displayExo(5, $test);

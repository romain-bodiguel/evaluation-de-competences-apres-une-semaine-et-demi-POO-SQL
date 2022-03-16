<?php
require_once '../inc/functions.php';

/*
 * Exo 4 : Luigi To The Rescue
 *
 * Luigi: Hi!
 * It seems like Mario is in trouble. I'm here to help!
 *
 * But, you know, Mario is my brother. I don't think we should have
 * a Mario class, and a Luigi class. Maybe, we can just pass our firstname
 * when we create the object?
 *
 * Oh, and I saw this is not programmed yet, but I want to say my punchline!
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Hero('Mario');
 *      echo $mario->hello(); // Display: "It's me, Mario!"
 *      $mario->takeHit();
 *      $mario->up();
 *      $mario->takeHit();
 *      echo $mario->getLives(); // Display: 2
 *
 *      $luigi = new Hero('Luigi');
 *      echo $luigi->hello(); // Display: "It's me, Luigi!"
 *      $luigi->up();
 *      $luigi->up();
 *      $luigi->takeHit();
 *      echo $luigi->getLives(); // Display: 4
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

// je crée une nouvelle classe Hero
class Hero {
    // je lui donne une propriété $name qui récupère le nom du héros, en plus de sa propriété $lives
    private $name;
    private $lives;

    // je crée une fonction __construct qui initialise sa valeur par défaut à 3, et laisse le name vide
    public function __construct($name = "", $lives = 3)
    {
        $this->name = $name;
        $this->lives = $lives;
    }

    // je crée une méthode hello() qui retourne le nom du héros
    public function hello() {
        $heroeName = $this->name;
        return 'It\'s me, '.$heroeName.'!';
    }

    // je crée une méthode qui incrémente le nombre de vie
    public function up() {
        $lives = $this->lives++;
        return $lives;
    }

    // je crée une méthode qui décrémente le nombre de vie
    public function takeHit() {
        $lives = $this->lives--;
        return $lives;
    }

    // je crée une méthode getLives qui retourne le nombre de vies (la valeur de $lives)
    public function getLives() {
        return $this->lives;
    }
}

// ------------------------
// END OF YOUR CODE
// ------------------------

/*
 * Tests
 * Pas touche !
 */
check(4);
/*
$mamie = new Hero('Mamie PHP');
displayExo(4, method_exists($mamie, 'hello') && $mamie->hello() === "It's me, Mamie PHP!");*/

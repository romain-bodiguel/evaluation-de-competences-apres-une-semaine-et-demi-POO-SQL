<?php
require_once '../inc/functions.php';

/*
 * Exo 3 : Bowser Is Coming
 *
 * Bowser: Mouhahahahahahahahaaaaaaa! It's me, Bowser!
 * Don't be mad, the game would not be fun if there is no bad guy in it.
 *
 * So. I want a way to kill Mario's life when I throw a turtle shell on him :)
 * Can you create me a method `takeHit`, and decrement Mario's lives when it's being used?
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3 (display because of the "echo")
 *      $mario->takeHit();
 *      echo $mario->getLives(); // Display: 2 (display because of the "echo")
 *
 * ---
 *
 * Mario: Heeeeey, what are you doing here?!?
 * …
 * Well…
 * …
 * OK, it's fair. A method to kill me. Nice.
 * But I want a method to gain 1up! I love these green mushrooms…
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3
 *      $mario->takeHit();
 *      $mario->up();
 *      $mario->up();
 *      $mario->takeHit();
 *      $mario->up();
 *      echo $mario->getLives(); // Display: 4
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

// je crée une class Mario
class Mario {
    // je lui donne une propriété $lives
    private $lives;

    // je crée une fonction __construct qui initialise sa valeur par défaut à 3
    public function __construct($lives = 3) {
        $this->lives = $lives;
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
check(3);

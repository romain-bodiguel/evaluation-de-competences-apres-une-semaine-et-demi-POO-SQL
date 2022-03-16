<?php
require_once '../inc/functions.php';

/*
 * Exo 2 : Please Respect My Privacy
 *
 * Aaaaah, I'm aliiiiive !
 *
 * Well... Now that I'm a human being, I have rights, OK? #MarioLivesMatter
 * As every other humain being, I have the right to privacy.
 * I'm not fond of my lives being public like that.
 *
 * Can you create me a `getLives()` method, that return the amount of lives that I have?
 * And of course, the property needs to be private now.
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3
 *      echo $mario->lives; // Fatal Error
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

    // je lui donne une propriété privée $lives
    private $lives;

    // je crée une fonction __construct qui initialise sa valeur par défaut à 3
    public function __construct($lives = 3) {
        $this->lives = $lives;
    }

    // je crée une fonction publique getLives() qui retourne la propriété $lives
    public function getLives() {
        return $this->lives;
    }   
}

// ------------------------
// END OF YOUR CODE
// ------------------------

/*
 * Tests
 * Do not touch.
 */
check(2);
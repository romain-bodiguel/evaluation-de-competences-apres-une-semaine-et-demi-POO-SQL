<?php
require_once '../inc/functions.php';

/*
 * Exo 1 : Mario Comes To Life
 *
 * Hello! It's me, Mario!
 *
 * Oh, I'm sorry, I'm not speaking French right now.
 * But I've been told you're a developer, so I figure
 * you speak English, at least a little.
 *
 * And for Peach's sake, you're a student in a school
 * named “O’clock”, so you HAVE to be able to read English!
 *
 * So, where were we?
 * OK, I'm Mario! But right now, I am not programmed yet.
 *
 * Can you write me a PHP class to make me exist?
 * Just a bare class nammed `Mario`, with just one property: `lives`.
 * In this game, I start with 3 lives. Oh, and this property
 * should be public knowledge…
 *
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->lives; // Display: 3
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

// je crée une nouvelle class Mario
class Mario {
    // je lui applique une propriété $lives
    public $lives = 3;

    // je crée un construct qui donne une valeur de 3 par défaut à la propriété $lives
    public function __construct($lives=3) {
        $this->lives = $lives;
    }
}


// ------------------------
// END OF YOUR CODE
// ------------------------

/*
 * Tests
 * Do not touch.
 */
check(1);

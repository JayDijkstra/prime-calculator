<?php

namespace App\Functions;

require_once('Prime.php');

namespace App\Functions;
/**
 * Class Calculate
 */
class Calculate
{
    /**
     * Calculate constructor.
     */
    public function __construct()
    {
        //Set a introduction line when the program will be runned!
        echo "Fill in a number wich you will calculate into primes! ";
        //Create a handler to open php:://stdin, a mode to get input from the user
        $handle = fopen ("php://stdin","r");
        //create a new line.
        $line = fgets($handle);
        //If the value is not a integer, abort the program and send an error that this program only excepts integers.
        //Echo a new line to give the user a more human friendly view of the command line application.
        echo "\n";
        $prime = new Prime;
        $prime->calculateIfPrime(intval($line));
    }
}



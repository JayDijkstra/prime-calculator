<?php
//Set a introduction line when the program will be runned!
echo "Fill in a number wich you will calculate into primes! ";
//Create a handler to open php:://stdin, a mode to get input from the user
$handle = fopen ("php://stdin","r");
//create a new line.
$line = fgets($handle);
//If the value is not a integer, abort the program and send an error that this program only excepts integers.
$line = intval($line);
if(!is_int($line)){
    echo "No Integer Found, Aborting!\n";
    exit;
}
//Echo a new line to give the user a more human friendly view of the command line application.
echo "\n";
echo "Thank you, continuing...\n";

//Execute the function to calculate primes!
prime($line);
/**
 * Function to calculate the given input on how much primes there are.
 *
 * @param int $number
 * @return string
 */
function prime(int $number)
{
    //If the number is a 1, this is not a prime number
    if($number == 1)
    {
        return "This is not a prime number";
    }

    //If the number is 2, this will be a prime number.
    if($number == 2)
    {
        return "this is a Prime Number!.";
    }

    //Create an array to hold numbers that ARE prime.
    $primeNumbers = [];
    //Create an Array to hold numbers that are NOT prime.
    $notPrime = [];

    //First check if an given Integer is NOT dividable by 2.
    if($number % 2 == 0)
    {
        //The number is not Prime.
        array_push($notPrime, $number);
        //return the number to the user.
        echo $notPrime;
    }
    //If the number is a prime number
    echo "Your chosen number ".$number. " is a Prime number!";
}

?>
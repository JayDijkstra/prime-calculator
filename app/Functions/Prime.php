<?php

namespace App\Functions;

/**
 * Class PrimeCalculator
 */
class Prime
{

    public $loadingtext = "The Program Is Calculating.";

    /**
     * Function to check out all the numbers before the given number.
     * Another function is called to check if these numbers are prime or not.
     * These numbers are seperatly added to different Arrays.
     * @param $number
     */
    public function calculateIfPrime($number)
    {
        //Create an array to hold numbers that ARE prime.
        $primeNumbers = [];
        //Create an Array to hold numbers that are NOT prime.
        $notPrime = [];

        //Check for earch number if there is a Prime number between them.
        for($i = 2; $i < $number; $i++) {
            //Create a variable for each checkable number.
            $primer = $this->checkIfPrime($i);
            if ($primer == 0)
            {
                //If the function returns a 0; or false, add this number to the non-prime array
                array_push($notPrime, $i);
            }
            else {
                //if the function returns a 1; or true, add this number to the prime array.
                array_push($primeNumbers, $i);
            }
        }


        //Create a Array to store the final sum.
        $finalArray = [];
        //Create a array to store the consecutive primes.
        $primeArray = [];
        //Check the sum of the array.
        foreach (array_values($primeNumbers) as $prime) {
            //For Each Number wait one second to show the next one
            sleep(1);
            //Create an array and calculate all primes with eachother to calculate if the max number is reached.
            $finalArray[] += $prime;
            //Check if the sum of the array is equal to the given number.
            if (array_sum($finalArray) >= $number) {
                $this->finalize($primeArray, $number);
                exit;
            };
            array_push($primeArray, $prime);
            echo $this->loadingtext . ".";
        }
    }
    /**
     * @param $array
     */
    public function finalize($array, $number)
    {
        //Show the user the output of the chosen number.
        echo "The longest sum of consecutive primes that adds to a prime below the number ". $number . " is ";
        //Create a white line for a better overview.
        echo "\n";
        //For each item in the Array
        foreach($array as $prime)
        {
            //Print it to the console
            echo "$prime";
            //Seperate it on a new line
            echo "\n";
        }
    }


    /**
     * Function to calculate if a number is prime or not.
     * @param int $number
     * @return int
     */
    public function checkIfPrime(int $number)
    {
        //For the number given.
        for ($x =2; $x < $number; $x++)
        {
            //Check if the number modulo 2 == equal to zero, if it is then this is not a prime.
            if($number % $x == 0)
            {
                //return false
                return 0;

            }
        }
        //For every other number return true.
        return 1;
    }
}

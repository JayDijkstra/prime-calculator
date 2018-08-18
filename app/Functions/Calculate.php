<?php

namespace App\Functions;

/**
 * Class Calculate
 */
    //Set a introduction line when the program will be runned!
    echo "Fill in a number wich you will calculate into primes! ";
    //Create a handler to open php:://stdin, a mode to get input from the user
    $handle = fopen ("php://stdin","r");
    //create a new line.
    $line = fgets($handle);
    //If the value is not a integer, abort the program and send an error that this program only excepts integers.
    //Echo a new line to give the user a more human friendly view of the command line application.
    echo "\n";
    prime(intval($line));

    //Execute the function to calculate primes!
    /**
     * Function to calculate the given input on how much primes there are.
     * @param int $number
     * @return string
     */
    function prime(int $number)
    {
        //Create an array to hold numbers that ARE prime.
        $primeNumbers = [];
        //Create an Array to hold numbers that are NOT prime.
        $notPrime = [];

        //For each number till the maximum input
        for($i = 2; $i <= $number; $i++)
        {
            //If the number is a 1, this is not a prime number
            if ($i == 1)
            {
                //For 1, this number is not a prime number, so add it to the NonPrime Array
                array_push($notPrime, $i);
            }
            //If the number is a 2, this is not a prime number
            if ($i == 2)
            {
                //For 2, this number is the only prime number, so add it to the NonPrime Array
                array_push($primeNumbers, $i);
            }
            //check if an given Integer is dividable by 2 and if it is
            //add that this number to the not prime list.
            if ($i % 2 == 0)
            {
                //Push the numbers that are 0 when divided by 2 to the not prime array.
                array_push($notPrime,$i);
            } else {
                //Push the numbers to the prime array.
                //check for each prime number
                array_push($primeNumbers, $i);
            }
        }

        //Create a Array to store the final sum.
        $finalArray = [];

        //Check the sum of the array.
        foreach($primeNumbers as $prime)
        {
            for($i = $prime[0]; $i < $primeNumbers; $i++)
            {
                sleep(2);
                $finalArray[] = $prime+$i;
                print_r($finalArray);
                if(array_sum($finalArray) == $number) echo "Maxiumum reached";


            }
        }
        

//        print_r($primeNumbers);

        echo "\n";

        echo "For the number you choose, the following primes are available:";
        echo "\n";
//        print_r ($primeNumbers);






}

?>
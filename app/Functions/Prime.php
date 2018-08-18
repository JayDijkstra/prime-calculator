<?php

namespace App\Functions;

/**
 * Class PrimeCalculator
 */
class Prime
{
    public function IsThisPrime($number)
    {
        //Create an array to hold numbers that ARE prime.
        $primeNumbers = [];
        //Create an Array to hold numbers that are NOT prime.
        $notPrime = [];
        //Create an Boolean to check if an Prime number is found
        $primeFound = true;
        //For each number till the maximum input
        for ($i = 2; $i < $number; $i++) {
            //check if each number till the maximum number given is a prime
            for($j = 2; $j < $i; $j++)
            {
                if($i % $j == 0)
                {
                    //This is not a prime number
                    $primeFound = false;
                }
                if($primeFound)
                {
                    array_push($primeNumbers, $j);
                    $primeFound = true;
                }
                else {
                    array_push($notPrime,$j);
                }
            }

        }

        //Create a Array to store the final sum.
        $finalArray = [];

        //Check the sum of the array.
        foreach (array_values($primeNumbers) as $prime) {
            sleep(1);
            $finalArray[] += $prime;
            print_r($finalArray);
            if (array_sum($finalArray) == $number || array_sum($finalArray) > $number) exit;
            print(array_sum($finalArray));
            //notify there are still more primes to come.
            echo "Still more Primes coming";
        }

        print_r($primeNumbers);

        echo "\n";

        echo "For the number you choose, the following primes are available:";
        echo "\n";
        print_r ($primeNumbers);


    }
}

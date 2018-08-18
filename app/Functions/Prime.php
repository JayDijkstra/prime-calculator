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



        //Foreach number till the given amount check if it is a prime number
        for($i = 2; $i < $number; $i++)
        {

            $n = abs($i);



            //Take some pre-steps before checking if a number really is prime or not
            if($i == 1)
            {
                //1 is not a prime number.. add it to the not a prime array.
                array_push($notPrime, $i);
            }
            if($i == 2)
            {
                //Prime is the only EVEN number, as it can be divided by 1 and it self.
                array_push($primeNumbers, $i);
            }

            /**
             * Use a function to check if the numbers are Prime or not. Also Square the numbers
             * To Check if It is a Prime or not.
             */
            if($n % 2 == 0)
            {
                array_push($notPrime, $i);
            } else {
                array_push($primeNumbers, $i);
            }
        }
        print_r($primeNumbers);
        exit;
        //Create a Array to store the final sum.
        $finalArray = [];

        //Check the sum of the array.
        foreach (array_values($primeNumbers) as $prime) {
            sleep(1);

            echo $prime;

//            $finalArray[] += $prime;
//            print_r($finalArray);
//            if (array_sum($finalArray) == $number || array_sum($finalArray) > $number) exit;
//            print(array_sum($finalArray));
//            //notify there are still more primes to come.
            echo "Still more Primes coming";
        }

        print_r($primeNumbers);

        echo "\n";

        echo "For the number you choose, the following primes are available:";
        echo "\n";
        print_r ($primeNumbers);


    }
}

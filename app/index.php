<?php
namespace App;
use App\Functions\Calculate;

/**
 * Class Main
 * @package App
 */
class Main
{
    public function __construct()
    {
        Calculate::class;
    }
    /**
     * @param int $number
     */
    function calculate_number(int $number)
    {
        $calculator = new Calculate;
        $calculator->prime($number);
    }
}








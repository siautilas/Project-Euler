<?php declare(strict_types=1);

/**
 * Class P1_1_Bruteforce
 * A class to calculate the sum of all multiples of 3 or 5 below a given number.
 */
class P1_1_Bruteforce
{

    /** @var int The upper limit below which multiples are considered */
    public int $below = 1000;

    /**
     * Calculate the sum of all multiples of 3 or 5 below the specified limit using a brute-force approach.
     * This method iterates through all numbers below the specified limit and checks if each number is a multiple
     * of 3 or 5. If it is, the number is added to the running total sum.
     * 
     * Note: This method utilizes a brute-force approach, which may not be the most efficient solution for large inputs.
     * For large values of 'below', the computation time may increase significantly. 
     * 
     * @return int The sum of all multiples of 3 or 5 below the specified limit.
     */
    public function getSumOfMultiplesOf3Or5()
    {
        $sum = 0;
        for ($i = 0; $i < $this->below; $i++) {
            if ($i % 3 == 0 || $i % 5 == 0) {
                $sum += $i;
            }
        }
        return $sum;
    }

}
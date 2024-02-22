<?php declare(strict_types=1);

/**
 * Class P1_2_SumFormula
 * A class to calculate the sum of all multiples of 3 or 5 below a given number using a formula.
 */
class P1_2_SumFormula
{
    /** @var int The upper limit below which multiples are considered */
    public int $below = 1000;

    /**
     * Calculates the sum of the first N natural numbers using the formula.
     *
     * @param int $n The number of natural numbers to sum up.
     * @return int The sum of the first N natural numbers.
     */
    private function sumOfFirstNNumbers(int $n): int
    {
        return ($n * ($n + 1)) / 2;
    }

    /**
     * Calculates the amount of multiples of a given number below the specified limit.
     *
     * @param int $multiplier The number to find multiples of.
     * @return int The amount of multiples of the given number below the specified limit.
     */
    private function amountOfMultiples(int $multiplier): int
    {
        return (int) floor(($this->below - 1) / $multiplier);
    }

    /**
     * Calculate the sum of all multiples of 3 or 5 below the specified limit using a formula.
     * 
     * This method utilizes a formula to efficiently calculate the sum of all multiples of 3 or 5 below the specified limit.
     * It calculates the sum of multiples of 3, multiples of 5, and then subtracts the sum of multiples of 15 (to avoid double-counting).
     * This approach is more efficient compared to the brute-force method, especially for large values of 'below', as it reduces the number of iterations needed.
     * 
     * For example, try to calculate sum of multiples below 10:
     * 3*(1+2+3) + 5*(1) - 15*(0) = 23
     * 
     * @return int The sum of all multiples of 3 or 5 below the specified limit.
     */
    public function getSumOfMultiplesOf3Or5(): int
    {
        $multiplesOf3 = $this->amountOfMultiples(3);
        $multiplesOf5 = $this->amountOfMultiples(5);
        $multiplesOf15 = $this->amountOfMultiples(15);
        
        // Calculate the sum of multiples of 3, multiples of 5, and then subtract the sum of multiples of 15 to avoid double-counting
        $sum = 3 * $this->sumOfFirstNNumbers($multiplesOf3) +
               5 * $this->sumOfFirstNNumbers($multiplesOf5) - 
              15 * $this->sumOfFirstNNumbers($multiplesOf15);
        
        return $sum;
    }
}
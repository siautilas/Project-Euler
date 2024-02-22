<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class P1_1_BruteforceTest extends TestCase
{
    /**
     * Test to verify if the sum of multiples of 3 or 5 below 10 is calculated correctly.
     */
    public function testIsBelow10MultipleSumIs23(): void
    {
        $P1_1_Bruteforce = new P1_1_Bruteforce();
        $P1_1_Bruteforce->below = 10;
        $sum = $P1_1_Bruteforce->getSumOfMultiplesOf3Or5();

        // Asserting that the sum of multiples of 3 or 5 below 10 is 23
        $this->assertSame($sum, 23);
    }

    /**
     * Test to verify if the sum of multiples of 3 or 5 below 1000 is calculated correctly.
     */
    public function testIsBelow1000MultipleSumIs233168(): void
    {
        $P1_1_Bruteforce = new P1_1_Bruteforce();
        $P1_1_Bruteforce->below = 1000;
        $sum = $P1_1_Bruteforce->getSumOfMultiplesOf3Or5();

        // Asserting that the sum of multiples of 3 or 5 below 1000 is 233168
        $this->assertSame($sum, 233168);
    }

}
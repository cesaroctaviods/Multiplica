<?php

namespace Multiplica\Tests;

use PHPUnit\Framework\TestCase;
use Multiplica\Exam\MultiplesChecker;

class MultiplesCheckerTest extends TestCase
{
    /** @var MultiplesChecker */
    private static $checker;

    const MAX_NUMBER=100;

    /**
     * This method is called before the first test of this test class is run.
     */
    public static function setUpBeforeClass()
    {
        self::$checker = new MultiplesChecker();
    }

    /**
     * @dataProvider multiplesOf3Provider
     * @param $multiple
     */
    public function testMultiplesOf3($multiple): void
    {

        $this->assertEquals(
            'MULTIPLE OF 3 :'.$multiple,
            self::$checker->check(3, $multiple, 'MULTIPLE OF 3 :'.$multiple)
        );
    }

    /**
     * @dataProvider noMultiplesOf3Provider
     * @param $noMultiple
     */
    public function testNoMultiplesOf3($noMultiple): void
    {
        $this->assertEquals(
            '',
            self::$checker->check(3, $noMultiple, 'NO MULTIPLE OF 3 :'.$noMultiple)
        );
    }

    /**
     * @dataProvider multiplesOf5Provider
     * @param $multiple
     */
    public function testMultiplesOf5($multiple): void
    {
         $this->assertEquals(
             'MULTIPLE OF 5 :'.$multiple,
             self::$checker->check(5, $multiple, 'MULTIPLE OF 5 :'.$multiple)
         );
    }

    /**
     * @dataProvider noMultiplesOf5Provider
     * @param $noMultiple
     */
    public function testNoMultiplesOf5($noMultiple): void
    {
         $this->assertEquals(
             '',
             self::$checker->check(5, $noMultiple, 'NO MULTIPLE OF 5 :'.$noMultiple)
         );
    }


    /**
     * @dataProvider multiplesOf15Provider
     * @param $multiple
     */
    public function testMultiplesOf15($multiple): void
    {
         $this->assertEquals(
             'MULTIPLE OF 15 :'.$multiple,
             self::$checker->check(15, $multiple, 'MULTIPLE OF 15 :'.$multiple)
         );
    }

    /**
     * @dataProvider noMultiplesOf15Provider
     * @param $noMultiple
     */
    public function testNoMultiplesOf15($noMultiple): void
    {
         $this->assertEquals(
             '',
             self::$checker->check(15, $noMultiple, 'NO MULTIPLE OF 15 :'.$noMultiple)
         );
    }

    public function multiplesOf3Provider()
    {
        return $this->getMultiplesOf(3);
    }

    public function noMultiplesOf3Provider()
    {
        return  $this->getNoMultiplesOf(3);
    }

    public function multiplesOf5Provider()
    {
        return $this->getMultiplesOf(5);
    }

    public function noMultiplesOf5Provider()
    {
         return  $this->getNoMultiplesOf(5);
    }

    public function multiplesOf15Provider()
    {
         return $this->getMultiplesOf(15);
    }

    public function noMultiplesOf15Provider()
    {
         return  $this->getNoMultiplesOf(15);
    }

    /**
     * @param $number
     * @param bool $asArray
     * @return array
     */
    private function getMultiplesOf($number, $asArray = true)
    {
        $multiples=[];
        for ($i=1; $i<self::MAX_NUMBER+1; $i++) {
            $multiple=$number*$i;
            if ($multiple>self::MAX_NUMBER) {
                break;
            }
            if ($asArray) {
                $multiples[]=[$multiple];
            } else {
                $multiples[]=$multiple;
            }
        }

         return $multiples;
    }

    public function getNoMultiplesOf($number)
    {
        $multiples=$this->getMultiplesOf($number, false);

        $noMultiples=[];
        for ($i=1; $i<self::MAX_NUMBER+1; $i++) {
            if (!in_array($i, $multiples)) {
                $noMultiples[] = [$i];
            }
        }

        return $noMultiples;
    }
}

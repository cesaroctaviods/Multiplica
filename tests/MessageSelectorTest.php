<?php

namespace Multiplica\Tests;

use Multiplica\Exam\MultiplesChecker;
use Multiplica\Exam\MessageSelector;
use PHPUnit\Framework\TestCase;

class MessageSelectorTest extends TestCase
{

    /** @var MessageSelector */
    private static $messageSelector;

    const MAX_NUMBER=100;
    /**
     * This method is called before the first test of this test class is run.
     */
    public static function setUpBeforeClass()
    {
        $checker = new MultiplesChecker();
        self::$messageSelector = new MessageSelector($checker);
    }

    /**
     * @dataProvider linianosProvider
     */
    public function testLinianos($number): void
    {
        $this->assertEquals(
            'Linianos',
            self::$messageSelector->select($number)
        );
    }

    /**
     * @dataProvider itsProvider
     */
    public function testITs($number): void
    {
        $this->assertEquals(
            'IT',
            self::$messageSelector->select($number)
        );
    }

    /**
     * @dataProvider liniosProvider
     */
    public function testLinios($number): void
    {

        $this->assertEquals(
            'Linio',
            self::$messageSelector->select($number)
        );
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testNumbers($number): void
    {

        $this->assertEquals(
            $number,
            self::$messageSelector->select($number)
        );
    }


    public function linianosProvider()
    {
        return $this->getMultiplesOf(15);
    }

    public function itsProvider()
    {
        $linianos=$this->getMultiplesOf(15, false);
        $multiples=$this->getMultiplesOf(5, false);
        $diff=array_diff($multiples, $linianos);

        $its=[];
        foreach ($diff as $val) {
            $its[]=[$val];
        }
        return $its;
    }

    public function liniosProvider()
    {
        $linianos=$this->getMultiplesOf(15, false);
        $multiples=$this->getMultiplesOf(3, false);
        $diff=array_diff($multiples, $linianos);

        $linios=[];
        foreach ($diff as $val) {
            $linios[]=[$val];
        }
        return $linios;
    }

    public function numbersProvider()
    {
        $linianos=$this->getMultiplesOf(15, false);
        $multiples3=$this->getMultiplesOf(3, false);
        $multiples5=$this->getMultiplesOf(5, false);


        $range= range(1, 100);
        $diff=array_diff($range, $linianos, $multiples3, $multiples5);

        $numbers=[];
        foreach ($diff as $val) {
            $numbers[]=[$val];
        }

        return $numbers;
    }


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
}
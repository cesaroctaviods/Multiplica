<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Multiplica\Exam\MultiplesChecker;

final class MultiplesCheckerTest extends TestCase
{
    /**
     * @dataProvider multiplesOf3Provider
     */
    public function testMultiplesOf3($multiple): void
    {
        $checker = new MultiplesChecker();
        $this->assertEquals(
            'MULTIPLE OF 3 :'.$multiple, $checker->check(3,$multiple,'MULTIPLE OF 3 :'.$multiple)
        );
    }

    /**
     * @dataProvider noMultiplesof3Provider
     */
    public function testNoMultiplesOf3($noMultiple): void
    {
        $checker = new MultiplesChecker();
        $this->assertEquals(
            '', $checker->check(3,$noMultiple,'NO MULTIPLE OF 3 :'.$noMultiple)
        );
    }

    /**
     * @dataProvider multiplesOf5Provider
     */
    public function testMultiplesOf5($multiple): void
    {
        $checker = new MultiplesChecker();
        $this->assertEquals(
            'MULTIPLE OF 5 :'.$multiple, $checker->check(5,$multiple,'MULTIPLE OF 5 :'.$multiple)
        );
    }

    /**
     * @dataProvider noMultiplesof5Provider
     */
    public function testNoMultiplesOf5($noMultiple): void
    {
        $checker = new MultiplesChecker();
        $this->assertEquals(
            '', $checker->check(5,$noMultiple,'NO MULTIPLE OF 5 :'.$noMultiple)
        );
    }


    public function multiplesOf3Provider()
    {
        $multiples=[];
        for ($i=1; $i<100; $i++){
            $multiples[]=[3*$i];
        }

        return $multiples;
    }

    public function noMultiplesof3Provider()
    {
        $multiples=[];
        for ($i=1; $i<100; $i++){
            $multiples[]=3*$i;
        }

        $noMultiples=[];
        for ($i=1; $i<100; $i++){
            if ( !in_array($i, $multiples)){
                $noMultiples[] = [$i];
            }
        }

        //print_r($noMultiples); exit;
        return $noMultiples;
    }

    public function multiplesOf5Provider()
    {
        $multiples=[];
        for ($i=1; $i<100; $i++){
            $multiples[]=[5*$i];
        }

        return $multiples;
    }

    public function noMultiplesof5Provider()
    {
        $multiples=[];
        for ($i=1; $i<100; $i++){
            $multiples[]=5*$i;
        }

        $noMultiples=[];
        for ($i=1; $i<100; $i++){
            if ( !in_array($i, $multiples)){
                $noMultiples[] = [$i];
            }
        }

        return $noMultiples;
    }
}




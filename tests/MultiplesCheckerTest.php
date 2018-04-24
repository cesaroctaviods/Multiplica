<?php
declare(strict_types=1);

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
    public static function setUpBeforeClass()/* The :void return type declaration that should be here would cause a BC issue */
    {
        self::$checker = new MultiplesChecker();
    }

    /**
     * @dataProvider multiplesOf3Provider
     */
    public function testMultiplesOf3($multiple): void
    {

        $this->assertEquals(
            'MULTIPLE OF 3 :'.$multiple, self::$checker->check(3,$multiple,'MULTIPLE OF 3 :'.$multiple)
        );
    }

    /**
     * @dataProvider noMultiplesof3Provider
     */
    public function testNoMultiplesOf3($noMultiple): void
    {
        $this->assertEquals(
            '', self::$checker->check(3,$noMultiple,'NO MULTIPLE OF 3 :'.$noMultiple)
        );
    }

    /**
  * @dataProvider multiplesOf5Provider
  */
     public function testMultiplesOf5($multiple): void
     {
         $this->assertEquals(
             'MULTIPLE OF 5 :'.$multiple, self::$checker->check(5,$multiple,'MULTIPLE OF 5 :'.$multiple)
         );
     }

     /**
      * @dataProvider noMultiplesof5Provider
      */
     public function testNoMultiplesOf5($noMultiple): void
     {
         $this->assertEquals(
             '', self::$checker->check(5,$noMultiple,'NO MULTIPLE OF 5 :'.$noMultiple)
         );
     }


     /**
      * @dataProvider multiplesOf15Provider
      */
     public function testMultiplesOf15($multiple): void
     {
         $this->assertEquals(
             'MULTIPLE OF 15 :'.$multiple, self::$checker->check(15,$multiple,'MULTIPLE OF 15 :'.$multiple)
         );
     }

     /**
      * @dataProvider noMultiplesof15Provider
      */
     public function testNoMultiplesOf15($noMultiple): void
     {
         $this->assertEquals(
             '', self::$checker->check(15,$noMultiple,'NO MULTIPLE OF 15 :'.$noMultiple)
         );
     }

    public function multiplesOf3Provider()
    {
        return $this->getMultiplesOf(3);
    }

    public function noMultiplesof3Provider()
    {
        return  $this->getNoMultiplesOf(3);
    }

    public function multiplesOf5Provider()
    {
        return $this->getMultiplesOf(5);
    }

     public function noMultiplesof5Provider()
     {
         return  $this->getNoMultiplesOf(5);
     }

     public function multiplesOf15Provider()
     {
         return $this->getMultiplesOf(15);
     }

     public function noMultiplesof15Provider()
     {
         return  $this->getNoMultiplesOf(15);
     }

     private function getMultiplesOf($number, $asArray=true){
         $multiples=[];
         for ($i=1; $i<self::MAX_NUMBER+1; $i++){
             $multiple=$number*$i;
             if ($multiple>self::MAX_NUMBER) {
                 break;
             }
             if ($asArray){
                 $multiples[]=[$multiple];
             }else{
                 $multiples[]=$multiple;
             }

         }

         return $multiples;
     }

     public function getNoMultiplesOf($number)
     {
         $multiples=$this->getMultiplesOf($number, false);

         $noMultiples=[];
         for ($i=1; $i<self::MAX_NUMBER+1; $i++){
             if ( !in_array($i, $multiples)){
                 $noMultiples[] = [$i];
             }
         }

         return $noMultiples;
     }

}




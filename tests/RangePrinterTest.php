<?php
/**
 * Created by PhpStorm.
 * User: cesaroctavio
 * Date: 24/04/18
 * Time: 14:46
 */

use Multiplica\Exam\MultiplesChecker;
use Multiplica\Exam\MessageSelector;
use Multiplica\Exam\RangePrinter;
use PHPUnit\Framework\TestCase;


class RangePrinterTest extends TestCase
{

    /** @var RangePrinter */
    private static $rangePrinter;

    const MAX_NUMBER=100;

    /**
     * This method is called before the first test of this test class is run.
     */
    public static function setUpBeforeClass()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $checker = new MultiplesChecker();
        $messageSelector = new MessageSelector($checker);


        self::$rangePrinter = new RangePrinter($messageSelector);
    }

    public function testRage()
    {

        self::$rangePrinter->execute(1, 3);
        $this->expectOutputString('1'."\n".'2'."\n".'Linio'."\n");

    }

}
<?php

namespace Tests\SamMcDonald\Functions;

use PHPUnit\Framework\TestCase;
use function SamMcDonald\Functions\digits;

/**
 * @covers \SamMcDonald\Functions\digits
 */
class DigitsTest extends TestCase
{
    public function testSomething(): void
    {
        $a = str_split("012345");
        $b = digits("012345.6");

        self::assertEquals('string', gettype($a[0]));
        self::assertEquals('integer', gettype($b[0]));

        self::assertEquals([0,1,2,3,4,5], str_split("012345"));
        self::assertEquals([0,1,2,3,4,5,6], digits("012345.6"));
        self::assertEquals([0,1,2,3,4,5,6], digits("0123456"));
        self::assertFalse(digits("a0123456"));
    }
}

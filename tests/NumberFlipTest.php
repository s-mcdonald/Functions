<?php

namespace Tests\SamMcDonald\Functions;

use PHPUnit\Framework\TestCase;
use function SamMcDonald\Functions\number_flip;

/**
 * @covers \SamMcDonald\Functions\number_flip
 */
class NumberFlipTest extends TestCase
{
    public function testNumberFlip(): void
    {
        self::assertEquals(123, number_flip(-123));
        self::assertEquals(-123, number_flip(123));
    }

    public function testNumberFlipWithFloat(): void
    {
        self::assertEquals(123.456, number_flip(-123.456));
        self::assertEquals(-123.456, number_flip(123.456));
    }
}

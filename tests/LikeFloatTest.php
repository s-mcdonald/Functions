<?php

namespace Tests\SamMcDonald\Functions;

use PHPUnit\Framework\TestCase;
use function SamMcDonald\Functions\like_float;

/**
 * @covers \SamMcDonald\Functions\like_float
 */
class LikeFloatTest extends TestCase
{
    public function testLikeFloatWithStringableNotNumeric(): void
    {
        $class = new class implements \Stringable {
            public function __toString(): string
            {
                return 'a123';
            }
        };
        self::assertFalse(like_float($class));
    }

    public function testLikeFloatWithStringable(): void
    {
        $class = new class implements \Stringable {
            public function __toString(): string
            {
                return '123.45';
            }
        };
        self::assertTrue(like_float($class));
    }

    public function testLikeFloatWithStringableAsInt(): void
    {
        $class = new class implements \Stringable {
            public function __toString(): string
            {
                return '123';
            }
        };
        self::assertFalse(like_float($class));
    }

    public function testLikeIntWithInvalidString(): void
    {
        self::assertFalse(like_float("a0123456"));
    }

    public function testLikeFloatWithLeadingZero(): void
    {
        self::assertTrue(like_float("0123456.78"));
    }

    public function testLikeFloatWithNonFloatFloatVal(): void
    {
        self::assertTrue(like_float(123.45));
    }

    public function testLikeFloatWithValueAsInt(): void
    {
        self::assertFalse(like_float(123));
    }

    public function testLikeFloatWithFloatString(): void
    {
        self::assertTrue(like_float("12345.6"));
    }

    public function testLikeFloatWithInt(): void
    {
        self::assertFalse(like_float(123));
    }
}

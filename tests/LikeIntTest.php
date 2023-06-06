<?php

namespace Tests\SamMcDonald\Functions;

use PHPUnit\Framework\TestCase;
use function SamMcDonald\Functions\like_int;

/**
 * @covers \SamMcDonald\Functions\like_int
 */
class LikeIntTest extends TestCase
{
    public function testLikeIntWithStringableNotNumeric(): void
    {
        $class = new class implements \Stringable {
            public function __toString(): string
            {
                return 'a123';
            }
        };
        self::assertFalse(like_int($class));
    }

    public function testLikeIntWithStringable(): void
    {
        $class = new class implements \Stringable {
            public function __toString(): string
            {
                return '123';
            }
        };
        self::assertTrue(like_int($class));
    }

    public function testLikeIntWithStringableAsFloat(): void
    {
        $class = new class implements \Stringable {
            public function __toString(): string
            {
                return '123.012';
            }
        };
        self::assertFalse(like_int($class));
    }

    public function testLikeIntWithInvalidString(): void
    {
        self::assertFalse(like_int("a0123456"));
    }

    public function testLikeIntWithLeadingZero(): void
    {
        self::assertTrue(like_int("0123456"));
    }

    public function testLikeIntWithNonIntFloatVal(): void
    {
        self::assertFalse(like_int(123.456));
    }

    public function testLikeIntWithFloatAsInt(): void
    {
        self::assertTrue(like_int(123.0));
    }

    public function testLikeIntWithFloatString(): void
    {
        self::assertFalse(like_int("12345.6"));
    }

    public function testLikeIntWithInt(): void
    {
        self::assertTrue(like_int(123));
    }
}

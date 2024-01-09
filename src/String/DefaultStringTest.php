<?php

declare(strict_types=1);

namespace Elegant\Types\String;

use PHPUnit\Framework\TestCase;

final class DefaultStringTest extends TestCase
{
    public function testReturnedValue(): void
    {
        $this->assertSame(
            'abc',
            (new DefaultString('abc'))->value()
        );
    }

    public function testSuccessfulComparison(): void
    {
        $this->assertTrue((new DefaultString('abc'))->equals(new DefaultString('abc')));
    }

    public function testFailedComparison(): void
    {
        $this->assertFalse((new DefaultString('abc'))->equals(new DefaultString('a')));
    }
}

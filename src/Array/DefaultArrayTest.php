<?php

declare(strict_types=1);

namespace Elegant\Types\Array;

use PHPUnit\Framework\TestCase;

final class DefaultArrayTest extends TestCase
{
    public function testReturnedValue(): void
    {
        $this->assertSame(
            [1, 2, 3],
            (new DefaultArray([1, 2, 3]))->value()
        );
    }

    public function testSuccessfulComparison(): void
    {
        $this->assertTrue((new DefaultArray([1, 2, 3]))->equals(new DefaultArray([1, 2, 3])));
    }

    public function testFailedComparison(): void
    {
        $this->assertFalse((new DefaultArray([1, 2, 3]))->equals(new DefaultArray([3, 2, 1])));
    }
}

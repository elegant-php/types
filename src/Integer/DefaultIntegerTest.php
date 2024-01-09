<?php

declare(strict_types=1);

namespace Elegant\Types\Integer;

use PHPUnit\Framework\TestCase;

final class DefaultIntegerTest extends TestCase
{
    public function testReturnedValue(): void
    {
        $this->assertSame(
            5,
            (new DefaultInteger(5))->value()
        );
    }

    public function testSuccessfulComparison(): void
    {
        $this->assertTrue((new DefaultInteger(3))->equals(new DefaultInteger(3)));
    }

    public function testFailedComparison(): void
    {
        $this->assertFalse((new DefaultInteger(3))->equals(new DefaultInteger(5)));
    }
}

<?php

declare(strict_types=1);

namespace Elegant\Types\Float;

use PHPUnit\Framework\TestCase;

final class DefaultFloatTest extends TestCase
{
    public function testReturnedValue(): void
    {
        $this->assertSame(
            5.5,
            (new DefaultFloat(5.5))->value()
        );
    }

    public function testSuccessfulComparison(): void
    {
        $this->assertTrue((new DefaultFloat(5.5))->equals(new DefaultFloat(5.5)));
    }

    public function testFailedComparison(): void
    {
        $this->assertFalse((new DefaultFloat(5.5))->equals(new DefaultFloat(5.3)));
    }
}

<?php

declare(strict_types=1);

namespace Elegant\Types\Boolean;

use PHPUnit\Framework\TestCase;

final class DefaultBooleanTest extends TestCase
{
    public function testReturnedValue(): void
    {
        $this->assertSame(
            true,
            (new DefaultBoolean(true))->value()
        );
    }

    public function testSuccessfulComparison(): void
    {
        $this->assertTrue((new DefaultBoolean(true))->equals(new DefaultBoolean(true)));
    }

    public function testFailedComparison(): void
    {
        $this->assertFalse((new DefaultBoolean(true))->equals(new DefaultBoolean(false)));
    }
}

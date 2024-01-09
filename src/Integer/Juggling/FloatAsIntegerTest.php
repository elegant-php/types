<?php

declare(strict_types=1);

namespace Elegant\Types\Integer\Juggling;

use Elegant\Types\Float as FType;
use Elegant\Types\Integer as IType;
use PHPUnit\Framework\TestCase;

final class FloatAsIntegerTest extends TestCase
{
    public function testTypeCasting(): void
    {
        $this->assertSame(
            (new IType\Zero())->value(),
            (new FloatAsInteger(new FType\Zero()))->value()
        );
    }
}

<?php

declare(strict_types=1);

namespace Elegant\Types\Float;

final class Zero extends FloatType
{
    /**
     * @return float
     */
    public function value(): float
    {
        return 0.0;
    }
}

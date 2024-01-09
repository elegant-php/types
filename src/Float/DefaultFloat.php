<?php

declare(strict_types=1);

namespace Elegant\Types\Float;

final class DefaultFloat extends FloatType
{
    /**
     * @param float $value
     */
    public function __construct(
        private readonly float $value
    ) { }

    /**
     * @return float
     */
    public function value(): float
    {
        return $this->value;
    }
}

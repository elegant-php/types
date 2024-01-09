<?php

declare(strict_types=1);

namespace Elegant\Types\Float;

abstract class FloatType
{
    /**
     * @return float
     */
    abstract public function value(): float;

    /**
     * @param FloatType $different
     * @return bool
     */
    final public function equals(FloatType $different): bool
    {
        return $different->value() === $this->value();
    }
}

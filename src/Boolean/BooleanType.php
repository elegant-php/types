<?php

declare(strict_types=1);

namespace Elegant\Types\Boolean;

abstract class BooleanType
{
    /**
     * @return bool
     */
    abstract public function value(): bool;

    /**
     * @param BooleanType $different
     * @return bool
     */
    final public function equals(BooleanType $different): bool
    {
        return $different->value() === $this->value();
    }
}

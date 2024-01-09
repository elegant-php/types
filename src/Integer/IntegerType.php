<?php

declare(strict_types=1);

namespace Elegant\Types\Integer;

abstract class IntegerType
{
    /**
     * @return int
     */
    abstract public function value(): int;

    /**
     * @param IntegerType $different
     * @return bool
     */
    final public function equals(IntegerType $different): bool
    {
        return $different->value() === $this->value();
    }
}

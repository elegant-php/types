<?php

declare(strict_types=1);

namespace Elegant\Types\Array;

abstract class ArrayType
{
    /**
     * @return array<int|string,mixed>
     */
    abstract public function value(): array;

    /**
     * @param ArrayType $different
     * @return bool
     */
    final public function equals(ArrayType $different): bool
    {
        return $different->value() === $this->value();
    }
}

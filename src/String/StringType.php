<?php

declare(strict_types=1);

namespace Elegant\Types\String;

abstract class StringType
{
    /**
     * @return string
     */
    abstract public function value(): string;

    /**
     * @param StringType $different
     * @return bool
     */
    final public function equals(StringType $different): bool
    {
        return $different->value() === $this->value();
    }
}

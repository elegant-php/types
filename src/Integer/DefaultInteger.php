<?php

declare(strict_types=1);

namespace Elegant\Types\Integer;

final class DefaultInteger extends IntegerType
{
    /**
     * @param int $value
     */
    public function __construct(
        private readonly int $value
    ) {}

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->value;
    }
}

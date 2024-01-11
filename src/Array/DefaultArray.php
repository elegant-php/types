<?php

declare(strict_types=1);

namespace Elegant\Types\Array;

final class DefaultArray extends ArrayType
{
    /**
     * @param array<int|string,mixed> $value
     */
    public function __construct(
        private readonly array $value
    ) { }

    /**
     * @return array<int|string,mixed>
     */
    public function value(): array
    {
        return $this->value;
    }
}

<?php

declare(strict_types=1);

namespace Elegant\Types\Array;

final class EmptyArray extends ArrayType
{
    /**
     * @return array<int|string,mixed>
     */
    public function value(): array
    {
        return [];
    }
}

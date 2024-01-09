<?php

declare(strict_types=1);

namespace Elegant\Types\Integer;

final class Zero extends IntegerType
{
    /**
     * @return int
     */
    public function value(): int
    {
        return 0;
    }
}

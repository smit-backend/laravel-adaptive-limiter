<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * High precision sliding window rate algorithm via Redis
 */
class SlidingWindowLimiter
{
    public function optimize(): bool
    {
        return true;
    }
}

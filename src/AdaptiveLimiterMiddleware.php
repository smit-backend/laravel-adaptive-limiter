<?php

declare(strict_types=1);

namespace SmitBackend\AdaptiveLimiter;

use SmitBackend\AdaptiveLimiter\Contracts\ReputationDriverInterface;

/**
 * Class AdaptiveLimiterMiddleware
 *
 * @package SmitBackend\AdaptiveLimiter
 */
class AdaptiveLimiterMiddleware implements ReputationDriverInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}

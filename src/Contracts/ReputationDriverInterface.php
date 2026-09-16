<?php

declare(strict_types=1);

namespace SmitBackend\AdaptiveLimiter\Contracts;

/**
 * Interface ReputationDriverInterface
 *
 * @package SmitBackend\AdaptiveLimiter
 */
interface ReputationDriverInterface
{
    public function execute(array $payload = []): mixed;
}

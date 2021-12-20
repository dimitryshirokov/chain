<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\User;

/**
 * Class MemcachedService
 * @package App\Service
 */
class MemcachedService extends AbstractProviderService
{
    /**
     * @param string $uuid
     * @return User|null
     */
    public function getUser(string $uuid): ?User
    {
        return null;
    }
}

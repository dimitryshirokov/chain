<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\User;

/**
 * Class RedisService
 * @package App\Service
 */
class RedisService extends AbstractProviderService
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

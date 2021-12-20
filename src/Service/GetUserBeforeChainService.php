<?php

declare(strict_types=1);

namespace App\Service;

use App\Exception\UserNotFoundException;
use App\Model\User;

/**
 * Class GetUserBeforeChainService
 * @package App\Service
 */
class GetUserBeforeChainService
{
    /**
     * @param DatabaseService $databaseService
     * @param MemcachedService $memcachedService
     * @param RedisService $redisService
     * @param InactiveDatabaseService $inactiveDatabaseService
     */
    public function __construct(
        private DatabaseService $databaseService,
        private MemcachedService $memcachedService,
        private RedisService $redisService,
        private InactiveDatabaseService $inactiveDatabaseService,
    ) {
    }

    /**
     * @param string $uuid
     * @return User
     */
    public function getUser(string $uuid): User
    {
        $user = $this->memcachedService->getUser($uuid);
        if ($user !== null) {
            return $user;
        }
        $user = $this->redisService->getUser($uuid);
        if ($user !== null) {
            return $user;
        }
        $user = $this->databaseService->getUser($uuid);
        if ($user !== null) {
            return $user;
        }
        $user = $this->inactiveDatabaseService->getUser($uuid);
        if ($user !== null) {
            return $user;
        }
        throw new UserNotFoundException(sprintf(
            'User with uuid %s not found',
            $uuid
        ));
    }
}

<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\User;

/**
 * Class InactiveDatabaseService
 * @package App\Service
 */
class InactiveDatabaseService extends AbstractProviderService
{
    /**
     * @param string $uuid
     * @return User|null
     */
    public function getUser(string $uuid): ?User
    {
        return new User();
    }
}

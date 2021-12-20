<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\User;

/**
 * Class DatabaseService
 * @package App\Service
 */
class DatabaseService extends AbstractProviderService
{
    public function getUser(string $uuid): ?User
    {
        return null;
    }
}

<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\User;

/**
 * Class AbstractProviderService
 * @package App\Service
 */
abstract class AbstractProviderService
{
    /**
     * @param string $uuid
     * @return User|null
     */
    abstract public function getUser(string $uuid): ?User;
}

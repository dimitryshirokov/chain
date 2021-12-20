<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\User;

/**
 * Class AbstractGetUserService
 * @package App\Service
 */
abstract class AbstractGetUserService
{
    /**
     * @param string $uuid
     * @return User
     */
    abstract public function getUser(string $uuid): User;
}

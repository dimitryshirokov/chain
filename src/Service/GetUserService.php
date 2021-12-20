<?php

declare(strict_types=1);

namespace App\Service;

use App\Chain\GetUser\Chain;
use App\Exception\UserNotFoundException;
use App\Model\User;

/**
 * Class GetUserService
 * @package App\Service
 */
class GetUserService extends AbstractGetUserService
{
    /**
     * @param Chain $getUserChain
     */
    public function __construct(
        private Chain $getUserChain,
    ) {
    }

    /**
     * @param string $uuid
     * @return User
     */
    public function getUser(string $uuid): User
    {
        $user = $this->getUserChain->getUser($uuid);
        if ($user === null) {
            throw new UserNotFoundException(sprintf(
                'User with uuid %s not found',
                $uuid
            ));
        }

        return $user;
    }
}

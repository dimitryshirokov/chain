<?php

declare(strict_types=1);

namespace App\Model;

/**
 * Class GetUser
 * @package App\Model
 */
class GetUser
{
    private ?User $user = null;

    /**
     * @param string $uuid
     */
    public function __construct(
        private string $uuid,
    ) {
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     */
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return bool
     */
    public function hasUser(): bool
    {
        return $this->user !== null;
    }
}

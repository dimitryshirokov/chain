<?php

declare(strict_types=1);

namespace App\Chain\GetUser;

use App\Chain\GetUser\Element\AbstractElement;
use App\Model\GetUser;
use App\Model\User;

/**
 * Class Chain
 * @package App\Chain\GetUser
 */
class Chain
{
    /**
     * @param AbstractElement[] $elements
     */
    public function __construct(
        private array $elements,
    ) {
    }

    /**
     * @param string $uuid
     * @return User|null
     */
    public function getUser(string $uuid): ?User
    {
        $model = new GetUser($uuid);
        foreach ($this->elements as $element) {
            $element->process($model);
            if ($model->hasUser()) {
                return $model->getUser();
            }
        }
        return null;
    }
}

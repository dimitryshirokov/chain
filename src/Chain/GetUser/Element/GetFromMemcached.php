<?php

declare(strict_types=1);

namespace App\Chain\GetUser\Element;

use Throwable;

/**
 * Class GetFromMemcached
 * @package App\Chain\GetUser\Element
 */
class GetFromMemcached extends AbstractElement
{
    /**
     * @param Throwable $e
     * @return void
     */
    protected function handleException(Throwable $e): void
    {
        $this->getLogger()->warning($e->getMessage());
    }
}

<?php

declare(strict_types=1);

namespace App\Chain\GetUser\Element;

use Throwable;

/**
 * Class GetFromRedis
 * @package App\Chain\GetUser\Element
 */
class GetFromRedis extends AbstractElement
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

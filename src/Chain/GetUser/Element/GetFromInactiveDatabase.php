<?php

declare(strict_types=1);

namespace App\Chain\GetUser\Element;

use Throwable;

/**
 * Class GetFromInactiveDatabase
 * @package App\Chain\GetUser\Element
 */
class GetFromInactiveDatabase extends AbstractElement
{
    /**
     * @param Throwable $e
     * @return void
     * @throws Throwable
     */
    protected function handleException(Throwable $e): void
    {
        $this->getLogger()->emergency($e->getMessage());
        throw $e;
    }
}

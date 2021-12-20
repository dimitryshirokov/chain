<?php

declare(strict_types=1);

namespace App\Chain\GetUser\Element;

use App\Model\GetUser;
use App\Service\AbstractProviderService;
use Psr\Log\LoggerInterface;
use Throwable;

/**
 * Class AbstractElement
 * @package App\Chain\GetUser\Element
 */
abstract class AbstractElement
{
    /**
     * @param AbstractProviderService $providerService
     * @param LoggerInterface $logger
     */
    public function __construct(
        private AbstractProviderService $providerService,
        private LoggerInterface $logger,
    ) {
    }

    /**
     * @param GetUser $model
     * @return void
     */
    public function process(GetUser $model): void
    {
        try {
            $user = $this->providerService->getUser($model->getUuid());
            $model->setUser($user);
        } catch (Throwable $e) {
            $this->handleException($e);
        }
    }

    /**
     * @param Throwable $e
     * @return void
     */
    abstract protected function handleException(Throwable $e): void;

    /**
     * @return LoggerInterface
     */
    protected function getLogger(): LoggerInterface
    {
        return $this->logger;
    }
}

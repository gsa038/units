<?php
declare(strict_types=1);

namespace App\Application\Actions\Unity;

use App\Application\Actions\Action;
use App\Domain\Unity\UnityRepository;
use Psr\Log\LoggerInterface;

abstract class UnityAction extends Action
{
    protected UnityRepository $unityRepository;

    public function __construct(LoggerInterface $logger, UnityRepository $unityRepository)
    {
        parent::__construct($logger);
        $this->unityRepository = $unityRepository;
    }
}

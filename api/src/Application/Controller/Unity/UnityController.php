<?php
declare(strict_types=1);

namespace App\Application\Controller\Unity;

use App\Application\Controller\Controller;
use App\Domain\Unity\UnityRepository;
use Psr\Log\LoggerInterface;

abstract class UnityController extends Controller
{
    protected UnityRepository $unityRepository;

    public function __construct(LoggerInterface $logger, UnityRepository $unityRepository)
    {
        parent::__construct($logger);
        $this->unityRepository = $unityRepository;
    }
}
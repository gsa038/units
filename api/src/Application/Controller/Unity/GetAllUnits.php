<?php
declare(strict_types=1);

namespace App\Application\Controller\Unity;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface;

class GetAllUnits extends UnityController
{
    protected function action(ServerRequestInterface $request, Response $response): Response
    {
        $units = $this->unityRepository->getAllUnits();
        return $this->respondWithData($units);
    }
}

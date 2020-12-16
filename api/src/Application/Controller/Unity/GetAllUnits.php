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

        if (count($units) > 0) {
            $this->logger->info("Units was returned.");
        } else {
            $this->logger->info("There are no units.");
        }
        return $this->respondWithData($units);
    }
}

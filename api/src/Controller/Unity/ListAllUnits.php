<?php
declare(strict_types=1);

namespace App\Application\Controller\Unity;

use App\Application\Controller\Controller;
use App\Domain\Unity\Unity;
use Psr\Http\Message\ResponseInterface as Response;

class ListAllUnits extends Controller
{
    protected function action($request, $response): Response
    {
        $units = Unity::orderBy('name', 'asc')->first()->toJson();

        $this->logger->info("Units was returned.");

        return $this->respondWithData($units);
    }
}

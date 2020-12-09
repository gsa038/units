<?php
declare(strict_types=1);

namespace App\Application\Controller\Unity;

use App\Application\Controller\Controller;
use App\Infrastructure\DBModels\Unity;
use Psr\Http\Message\ResponseInterface as Response;

class GetUnityByName extends Controller
{
    protected function action($request, $response): Response
    {
        $units = Unity::where('name', $request->getAttribute('name'))->get()->toJson();

        // $this->logger->info("Units was returned.");

        return $this->respondWithData(json_decode($units));
    }
}

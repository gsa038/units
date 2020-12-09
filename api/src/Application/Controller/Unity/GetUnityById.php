<?php
declare(strict_types=1);

namespace App\Application\Controller\Unity;

use App\Application\Controller\Controller;
use App\Infrastructure\DBModels\Unity;
use Psr\Http\Message\ResponseInterface as Response;

class GetUnityById extends Controller
{
    protected function action($request, $response): Response
    {
        $units = Unity::where('id', $request->getAttribute('id'))->get()->toJson();

        // $this->logger->info("Units was returned.");

        return $this->respondWithData(json_decode($units));
    }
}

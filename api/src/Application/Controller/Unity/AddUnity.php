<?php
declare(strict_types=1);

namespace App\Application\Controller\Unity;

use App\Application\Controller\Controller;
use App\Infrastructure\DBModels\Unity;
use Psr\Http\Message\ResponseInterface as Response;

class AddUnity extends Controller
{
    protected function action($request, $response) : Response
    {
        $units = $request->getAttribute('data');
        $result = Unity::create(json_encode($$units));
        $response = $response->getBody()->write($result);
        return $response;
    }
}
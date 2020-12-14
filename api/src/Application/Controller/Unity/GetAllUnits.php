<?php
declare(strict_types=1);

namespace App\Application\Controller\Unity;

use App\Application\Controller\Controller;
use App\Application\Models\Unity;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface;

class GetAllUnits extends Controller
{
    protected function action(ServerRequestInterface $request, Response $response): Response
    {
        $units = Unity::all();
        foreach ($units as $unity) {
            $resources = Unity::find($unity->id)->resources;
            if (count($resources) > 0) {
                $unity->resources = $resources;
            }
            $tags = Unity::find($unity->id)->tags;
            if (count($tags) > 0) {
                $unity->tags = $tags;
            }
        }
        return $this->respondWithData($units->toArray());
    }
}

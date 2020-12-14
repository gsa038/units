<?php
declare(strict_types=1);

namespace App\Application\Controller\Unity;

use App\Application\Controller\Controller;
use App\Application\Models\Unity;
use Psr\Http\Message\ResponseInterface as Response;

class GetAllUnits extends Controller
{
    protected function action($request, $response): Response
    {
        $units = Unity::all();
        foreach ($units as $unity) {
            $unity->resources = Unity::find($unity->id)->resources;
            $unity->tags = Unity::find($unity->id)->tags;
        }
        return $this->respondWithData($units->toArray());
    }
}

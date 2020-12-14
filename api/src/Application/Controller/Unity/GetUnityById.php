<?php
declare(strict_types=1);

namespace App\Application\Controller\Unity;

use App\Application\Controller\Controller;
use App\Application\Models\Unity;
use Psr\Http\Message\ResponseInterface as Response;

class GetUnityById extends Controller
{
    protected function action($request, $response): Response
    {
        $units = Unity::where('id', $request->getAttribute('id'))->get()->toJson();

        return $this->respondWithData(json_decode($units));
    }
}

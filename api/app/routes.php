<?php
declare(strict_types=1);

// use App\Application\Controller\Unity\CreateUnity;

use App\Application\Controller\Unity\GetUnityByName;
use App\Application\Controller\Unity\ListAllUnits;
// use App\Application\Controller\Unity\ViewUnityById;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->group('/units', function (Group $group) {
        // $group->post('', CreateUnity::class);
        $group->get('', ListAllUnits::class);
        // $group->get('/id/{id}', ViewUnityById::class);
        $group->get('/name/{name}', GetUnityByName::class);
        
    });

};

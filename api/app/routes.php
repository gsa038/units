<?php
declare(strict_types=1);

use App\Application\Controller\Unity\UnityCreateAction;
use App\Application\Controller\Unity\ViewUnityByIdAction;
use App\Application\Controller\Unity\ViewUnityByNameAction;
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
        $group->post('', UnityCreateAction::class);
        $group->get('/units/{id}', ViewUnityByIdAction::class);
        $group->get('/units/{name}', ViewUnityByNameAction::class);
    });

};

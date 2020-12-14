<?php
declare(strict_types=1);

use App\Application\Controller\TagRule\GetTagRuleByName;
use App\Application\Controller\Unity\GetAllUnits;
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
        $group->get('', GetAllUnits::class);
    });
    $app->group('/rules', function (Group $group) {
        $group->get('/{tagRuleName}', GetTagRuleByName::class);
    });

};

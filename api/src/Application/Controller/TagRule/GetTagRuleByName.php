<?php
declare(strict_types=1);

namespace App\Application\Controller\Rule;

use App\Application\Controller\Controller;
use App\Application\Models\TagRule;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpBadRequestException;
use Slim\Exception\HttpNotFoundException;

class GetTagRuleByName extends Controller
{
    protected function action(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $tagRuleName = $request->getAttribute('tagRuleName');
        if ($tagRuleName === null) {
            // throw new HttpBadRequestException("No tag rule name found");            
        }
        $tagRule = TagRule::find($tagRuleName);
        if ($tagRule === null) {
            // throw new HttpNotFoundException("No tag rule found for $tagRuleName");
        }
        return $this->respondWithData($tagRule);
    }
}
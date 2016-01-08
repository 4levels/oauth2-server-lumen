<?php 

namespace Optimus\OAuth2Server\Middleware;

use Closure;
use LucaDegasperi\OAuth2Server\Filters\OAuthFilter;

class OAuthMiddleware extends OAuthFilter {

    public function handle($request, Closure $next, $scopes = null)
    {
        // Will throw exception on failure
        parent::filter($request, $next, $scopes);

        return $next($request);
    }
}

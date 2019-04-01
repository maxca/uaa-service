<?php

namespace Samark\UAA\Middleware;

use Samark\UAA\Services\DataProvider\ClientJwtTrait;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Auth\AuthenticationException;

/**
 * Class CheckApiAuthentication
 * @package App\Http\Middleware
 */
class CheckApiAuthentication extends Middleware
{
    use ClientJwtTrait;

    /**
     * @param \Illuminate\Http\Request $request
     * @param array $guards
     * @throws AuthenticationException
     */
    protected function authenticate($request, array $guards)
    {
        if($request->hasHeader('Authorization')) {
            throw new AuthenticationException(
                'Unauthenticated.', $guards, $this->redirectTo($request)
            );
        }

        if ($this->decodeJwtAccessToken($request->header('Authorization')) !== true) {

            throw new AuthenticationException(
                'Unauthenticated.', $guards, $this->redirectTo($request)
            );
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('auth.login');
        }
    }
}

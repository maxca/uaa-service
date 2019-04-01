<?php

namespace Samark\UAA\Services\Clients;

use Samark\UAA\Request\Clients\ClientAuthorizeRequest;
use Samark\UAA\Request\Clients\ClientRefreshTokenRequest;

/**
 * Interface ClientInterface
 * @package Samark\UAA\Services\Clients
 * @author samark chisanguan <samarkchsngn@gmail.com>
 */
interface ClientInterface
{

    /**
     * @param \Samark\UAA\Request\Clients\ClientAuthorizeRequest $request
     * @return mixed
     */
    public function authorize(ClientAuthorizeRequest $request);

    /**
     * @param \Samark\UAA\Request\Clients\ClientRefreshTokenRequest $request
     * @return mixed
     */
    public function refreshToken(ClientRefreshTokenRequest $request);
}
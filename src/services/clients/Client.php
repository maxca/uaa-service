<?php

namespace Samark\UAA\Services\Clients;

use Samark\UAA\Request\Clients\ClientAuthorizeRequest;
use Samark\UAA\Request\Clients\ClientRefreshTokenRequest;
use Samark\UAA\Services\BaseService;


/**
 * Class Client
 * @package Samark\UAA\Services\Clients
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class Client extends BaseService implements ClientInterface
{

    /**
     * Setting endpoint
     * @var string
     */
    protected $configEndpoint = 'client';

    /**
     * Retrieve config auth profile
     * @return mixed
     */
    protected function getAccountBasicAuthenticate()
    {
        return config(PACKAGE_NAME . '.account');
    }

    /**
     * @param \Samark\UAA\Request\Clients\ClientAuthorizeRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function authorize(ClientAuthorizeRequest $request)
    {
        return $this->curlPost($this->endpoint, $request->all(), $this->getAccountBasicAuthenticate());
    }

    /**
     * @param \Samark\UAA\Request\Clients\ClientRefreshTokenRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refreshToken(ClientRefreshTokenRequest $request)
    {
        return $this->curlPost($this->endpoint, $request->all(), $this->getAccountBasicAuthenticate());
    }

}
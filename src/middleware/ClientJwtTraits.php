<?php

namespace Samark\UAA\Services\DataProvider;

use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
use Exception;
use Samark\UAA\Services\DataCurlGuzzleTrait;

/**
 * Trait ClientJwtTrait
 * @package App\Services\DataProvider
 * @author samark@chai
 */
trait ClientJwtTrait
{
    use DataCurlGuzzleTrait;

    /**
     * setting public data config
     * @var
     */
    protected $publicData;

    /**
     * @param $token
     * @return array|bool
     */
    public function decodeJwtAccessToken($token)
    {
        try {
            $credentials = JWT::decode($token, $this->getPublicKey(), $this->getDecodeType());
            $this->storeDataToConfig($credentials);
            return true;
        } catch (ExpiredException $exception) {
            return array(['code' => 500, 'message' => 'Provided token is expired.']);
        } catch (Exception $exception) {
            return array(['code' => 500, 'message' => $exception->getMessage()]);
        }
    }

    /**
     * @param $credentials
     * @return void
     */
    public function storeDataToConfig($credentials)
    {
        config([
            'oauth' => collect([
                'user_id'     => $credentials->jti,
                'client_id'   => $credentials->client_id,
                'roles'       => $credentials->authorities,
                'permissions' => $credentials->scope,
                'user_info'   => [
                    'name'       => $credentials->user_name,
                ],
            ])
        ]);
    }

    /**
     * @return mixed
     */
    protected function getPublicKey()
    {
        return $this->publicData[config('uaa.value', 'value')];
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function callGetPublicData()
    {
        $this->publicData = $this->curlGet($this->getEndpoint());
    }

    /**
     * @return string
     */
    protected function getEndpoint()
    {
        return config('uaa.endpoint.base-url')
            . config('uaa.endpoint.token-key');
    }

    /**
     * @return mixed
     */
    protected function getDecodeType()
    {
        return $this->publicData[config('uaa.algorithm', 'alg')];
    }
}
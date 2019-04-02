<?php

namespace Samark\UAA\Services\Cache;

use Samark\UAA\Services\BaseService;

/**
 * Class CacheService
 * @package Samark\UAA\Services\Cache
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class CacheService extends BaseService implements CacheServiceInterface
{
    /**
     * @var string
     */
    protected $configEndpoint = 'cache';

    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function resetAllCache()
    {
        $this->endpoint = '/clear-all';
        return $this->delete();
    }

    /**
     * @param $cacheName
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function resetCache($cacheName)
    {
        $this->endpoint = "/clear-all/$cacheName/clear";
        return $this->delete();
    }

    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function reFreshProperties()
    {
        $this->configEndpoint = 'base-url';
        $this->endpoint       = "/refresh-properties";
        return $this->create();
    }

}
<?php

namespace Samark\UAA\Services\Cache;

/**
 * Interface CacheServiceInterface
 * @package Samark\UAA\Services\Cache
 * @author samark chisanguan <samarkchsngn@gmail.com>
 */
interface CacheServiceInterface
{
    /**
     * @return mixed
     */
    public function resetAllCache();

    /**
     * @param $cacheName
     * @return mixed
     */
    public function resetCache($cacheName);

    /**
     * @return mixed
     */
    public function reFreshProperties();
}
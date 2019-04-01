<?php

namespace Samark\UAA\Services\Users;

use Samark\UAA\Request\ProfileInfo\GetActiveProfileRequest;
use Samark\UAA\Services\BaseService;

/**
 * Class ProfileInfo
 * @package Samark\UAA\Services\Users
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class ProfileInfo extends BaseService implements ProfileInfoInterface
{

    /**
     * Setting config endpoint
     * @var string
     */
    protected $configEndpoint = 'profile-info';

    /**
     * @param \Samark\UAA\Request\ProfileInfo\GetActiveProfileRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getActiveProfiles(GetActiveProfileRequest $request)
    {
        return $this->callGet($request->all());
    }

}
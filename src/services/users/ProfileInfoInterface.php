<?php

namespace Samark\UAA\Services\Users;

use Samark\UAA\Request\ProfileInfo\GetActiveProfileRequest;

/**
 * Interface ProfileInfoInterface
 * @package Samark\UAA\Services\Users
 * @author samark chisanguan <samarkchsngn@gmail.com>
 */
interface ProfileInfoInterface
{
    /**
     * @param \Samark\UAA\Request\ProfileInfo\GetActiveProfileRequest $request
     * @return mixed
     */
    public function getActiveProfiles(GetActiveProfileRequest $request);
}
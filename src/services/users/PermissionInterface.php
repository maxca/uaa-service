<?php

namespace Samark\UAA\Services\Users;

use Samark\UAA\Request\Clients\GetAllPermissionRequest;
use Samark\UAA\Request\Clients\UpdatePermissionRequest;
use Samark\UAA\Request\Clients\DeletePermissionRequest;
use Samark\UAA\Request\Clients\GetPermissionRequest;

/**
 * Interface PermissionInterface
 * @package Samark\UAA\Services\Users
 * @author samark chisanguan <samarkchsngn@gmail.com>
 */
interface PermissionInterface
{

    /**
     * @param \Samark\UAA\Request\Clients\GetAllPermissionRequest $request
     * @return mixed
     */
    public function getAllPermissions(GetAllPermissionRequest $request);


    /**
     * @param \Samark\UAA\Request\Clients\UpdatePermissionRequest $request
     * @return mixed
     */
    public function updatePermission(UpdatePermissionRequest $request);


    /**
     * @param \Samark\UAA\Request\Clients\DeletePermissionRequest $request
     * @return mixed
     */
    public function deletePermission(DeletePermissionRequest $request);


    /**
     * @param \Samark\UAA\Request\Clients\GetPermissionRequest $request
     * @return mixed
     */
    public function getPermission(GetPermissionRequest $request);
}
<?php

namespace Samark\UAA\Services\Users;

use Samark\UAA\Services\BaseService;
use Samark\UAA\Request\Clients\GetAllPermissionRequest;
use Samark\UAA\Request\Clients\UpdatePermissionRequest;
use Samark\UAA\Request\Clients\DeletePermissionRequest;
use Samark\UAA\Request\Clients\GetPermissionRequest;

/**
 * Class Permission
 * @package Samark\UAA\Services\Users
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class Permission extends BaseService implements PermissionInterface
{
    /**
     * Setting config endpoint
     * @var string
     */
    protected $configEndpoint = 'permissions';

    /**
     * @param \Samark\UAA\Request\Clients\GetAllPermissionRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAllPermissions(GetAllPermissionRequest $request)
    {
        return $this->list($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Clients\UpdatePermissionRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updatePermission(UpdatePermissionRequest $request)
    {
        return $this->update($request->id, $request->all());
    }

    /**
     * @param \Samark\UAA\Request\Clients\DeletePermissionRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deletePermission(DeletePermissionRequest $request)
    {
        return $this->delete($request->id);

    }

    /**
     * @param \Samark\UAA\Request\Clients\GetPermissionRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getPermission(GetPermissionRequest $request)
    {
        return $this->delete($request->id);
    }

}
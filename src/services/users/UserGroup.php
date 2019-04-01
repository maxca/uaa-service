<?php

namespace Samark\UAA\Services\Users;

use Samark\UAA\Request\UsersGroup\CreateUserGroupRequest;
use Samark\UAA\Request\UsersGroup\DeleteUserGroupRequest;
use Samark\UAA\Request\UsersGroup\GetAllUserGroupRequest;
use Samark\UAA\Request\UsersGroup\GetUserGroupRequest;
use Samark\UAA\Request\UsersGroup\UpdateUserGroupRequest;
use Samark\UAA\Services\BaseService;

/**
 * Class UserGroup
 * @package Samark\UAA\Services\Users
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class UserGroup extends BaseService implements UserGroupInterface
{
    /**
     * Setting config endpoint
     * @var string
     */
    protected $configEndpoint = 'user-groups';

    /**
     * @param \Samark\UAA\Request\UsersGroup\GetAllUserGroupRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAllUserGroup(GetAllUserGroupRequest $request)
    {
        return $this->list($request->all());
    }

    /**
     * @param \Samark\UAA\Request\UsersGroup\CreateUserGroupRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createUserGroup(CreateUserGroupRequest $request)
    {
        return $this->create($request->all());
    }

    /**
     * @param \Samark\UAA\Request\UsersGroup\UpdateUserGroupRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateUserGroup(UpdateUserGroupRequest $request)
    {
        return $this->update($request->id, $request->all());
    }

    /**
     * @param \Samark\UAA\Request\UsersGroup\DeleteUserGroupRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteUserGroup(DeleteUserGroupRequest $request)
    {
        return $this->delete($request->id);
    }

    /**
     * @param \Samark\UAA\Request\UsersGroup\GetUserGroupRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserGroup(GetUserGroupRequest $request)
    {
        return $this->detail($request->id);
    }

}
<?php

namespace Samark\UAA\Services\Users;

use Samark\UAA\Request\UsersGroup\CreateUserGroupRequest;
use Samark\UAA\Request\UsersGroup\DeleteUserGroupRequest;
use Samark\UAA\Request\UsersGroup\GetAllUserGroupRequest;
use Samark\UAA\Request\UsersGroup\GetUserGroupRequest;
use Samark\UAA\Request\UsersGroup\UpdateUserGroupRequest;

/**
 * Interface UserGroupInterface
 * @package Samark\UAA\Services\Users
 * @author samark chisanguan <samarkchsngn@gmail.com>
 */
interface UserGroupInterface
{

    /**
     * @param \Samark\UAA\Request\UsersGroup\GetAllUserGroupRequest $request
     * @return mixed
     */
    public function getAllUserGroup(GetAllUserGroupRequest $request);

    /**
     * @param \Samark\UAA\Request\UsersGroup\CreateUserGroupRequest $request
     * @return mixed
     */
    public function createUserGroup(CreateUserGroupRequest $request);

    /**
     * @param \Samark\UAA\Request\UsersGroup\UpdateUserGroupRequest $request
     * @return mixed
     */
    public function updateUserGroup(UpdateUserGroupRequest $request);

    /**
     * @param \Samark\UAA\Request\UsersGroup\DeleteUserGroupRequest $request
     * @return mixed
     */
    public function deleteUserGroup(DeleteUserGroupRequest $request);

    /**
     * @param \Samark\UAA\Request\UsersGroup\GetUserGroupRequest $request
     * @return mixed
     */
    public function getUserGroup(GetUserGroupRequest $request);

}
<?php

namespace Samark\UAA\Services\Users;

use Samark\UAA\Request\Users\ActivateRequest;
use Samark\UAA\Request\Users\AuthenticateRequest;
use Samark\UAA\Request\Users\GetAccountRequest;
use Samark\UAA\Request\Users\CreateAccountRequest;
use Samark\UAA\Request\Users\ChangePasswordRequest;
use Samark\UAA\Request\Users\RegisterActivateRequest;
use Samark\UAA\Request\Users\RegisterOtpRequest;
use Samark\UAA\Request\Users\RegisterRequest;
use Samark\UAA\Request\Users\ResetPasswordFinishRequest;
use Samark\UAA\Request\Users\ResetPasswordInitOtpRequest;
use Samark\UAA\Request\Users\ResetPasswordInitRequest;
use Samark\UAA\Request\Users\SocialUserConnectionRequest;

/**
 * Interface AccountResourceInterface
 * @package Samark\UAA\Services\Users
 * @author samark chisanguan <samarkchsngn@gmail.com>
 */
interface AccountResourceInterface
{
    /**
     * @param \Samark\UAA\Request\Users\GetAccountRequest $request
     * @return mixed
     */
    public function getAccount(GetAccountRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\CreateAccountRequest $request
     * @return mixed
     */
    public function saveAccount(CreateAccountRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\ChangePasswordRequest $request
     * @return mixed
     */
    public function changePassword(ChangePasswordRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\ResetPasswordFinishRequest $request
     * @return mixed
     */
    public function finishPasswordReset(ResetPasswordFinishRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\ResetPasswordInitRequest $request
     * @return mixed
     */
    public function requestPasswordReset(ResetPasswordInitRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\ResetPasswordInitOtpRequest $request
     * @return mixed
     */
    public function passwordResetValidationByOtp(ResetPasswordInitOtpRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\SocialUserConnectionRequest $request
     * @return mixed
     */
    public function getSocialUserConnection(SocialUserConnectionRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\ActivateRequest $request
     * @return mixed
     */
    public function activeAccount(ActivateRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\AuthenticateRequest $request
     * @return mixed
     */
    public function isAuthenticate(AuthenticateRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\RegisterRequest $request
     * @return mixed
     */
    public function registerAccount(RegisterRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\RegisterActivateRequest $request
     * @return mixed
     */
    public function activateUser(RegisterActivateRequest $request);

    /**
     * @param \Samark\UAA\Request\Users\RegisterOtpRequest $request
     * @return mixed
     */
    public function getOTPRequest(RegisterOtpRequest $request);


}
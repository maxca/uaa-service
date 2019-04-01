<?php

namespace Samark\UAA\Services\Users;

use Samark\UAA\Request\Users\ActivateRequest;
use Samark\UAA\Request\Users\AuthenticateRequest;
use Samark\UAA\Request\Users\RegisterActivateRequest;
use Samark\UAA\Request\Users\RegisterOtpRequest;
use Samark\UAA\Request\Users\RegisterRequest;
use Samark\UAA\Request\Users\ResetPasswordFinishRequest;
use Samark\UAA\Request\Users\ResetPasswordInitOtpRequest;
use Samark\UAA\Request\Users\ResetPasswordInitRequest;
use Samark\UAA\Request\Users\SocialUserConnectionRequest;
use Samark\UAA\Services\BaseService;
use Samark\UAA\Request\Users\GetAccountRequest;
use Samark\UAA\Request\Users\CreateAccountRequest;
use Samark\UAA\Request\Users\ChangePasswordRequest;

/**
 * Class AccountResource
 * @package Samark\UAA\Services\Users
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class AccountResource extends BaseService implements AccountResourceInterface
{
    /**
     * List of endpoint
     * @var array
     */
    protected $endpointList = [
        'getAccount'                   => 'account',
        'saveAccount'                  => 'account',
        'changePassword'               => 'account/change-password',
        'finishPasswordReset'          => 'account/reset-password/finish',
        'requestPasswordReset'         => 'account/reset-password/init',
        'passwordResetValidationByOtp' => 'account/reset-password/init/opt',
        'getSocialUserConnection'      => 'account/social-user-connection',
        'activeAccount'                => 'activate',
        'isAuthenticate'               => 'authenticate',
        'registerAccount'              => 'register',
        'activateUser'                 => 'register/activate',
        'getOTPRequest'                => 'register/otp',
    ];

    /**
     * @param \Samark\UAA\Request\Users\GetAccountRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccount(GetAccountRequest $request)
    {
        return $this->callGet($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\CreateAccountRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function saveAccount(CreateAccountRequest $request)
    {
        return $this->create($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\ChangePasswordRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        return $this->create($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\ResetPasswordFinishRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function finishPasswordReset(ResetPasswordFinishRequest $request)
    {
        return $this->create($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\ResetPasswordInitRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function requestPasswordReset(ResetPasswordInitRequest $request)
    {
        return $this->create($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\ResetPasswordInitOtpRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function passwordResetValidationByOtp(ResetPasswordInitOtpRequest $request)
    {
        return $this->create($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\SocialUserConnectionRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSocialUserConnection(SocialUserConnectionRequest $request)
    {
        return $this->callGet($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\ActivateRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function activeAccount(ActivateRequest $request)
    {
        return $this->callGet($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\AuthenticateRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function isAuthenticate(AuthenticateRequest $request)
    {
        return $this->callGet($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\RegisterRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function registerAccount(RegisterRequest $request)
    {
        return $this->create($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\RegisterActivateRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function activateUser(RegisterActivateRequest $request)
    {
        return $this->create($request->all());
    }

    /**
     * @param \Samark\UAA\Request\Users\RegisterOtpRequest $request
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOTPRequest(RegisterOtpRequest $request)
    {
        return $this->callGet($request->all());
    }

    /**
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        if (array_key_exists($name, $this->endpointList)) {
            $this->endpoint = config('uaa.endpoint.base-url')
                . '/api' . $this->endpointList['name'];
        }
    }

}
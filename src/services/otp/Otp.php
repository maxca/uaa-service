<?php

namespace Samark\UAA\Services\Otp;

use Samark\UAA\Services\BaseService;

/**
 * Class Otp
 * @package Samark\UAA\Services\Otp
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class Otp extends BaseService implements OtpInterface
{
    /**
     * Setting config endpoint
     * @var string
     */
    protected $configEndpoint = 'otp';

    /**
     * @param array $params
     * @return mixed|void
     */
    public function getOTPRequest($params = array())
    {

    }

    /**
     * @param array $params
     * @return mixed|void
     */
    public function validateOTP($params = array())
    {

    }

}
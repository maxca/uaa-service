<?php

namespace Samark\UAA\Services\Otp;

/**
 * Interface OtpInterface
 * @package Samark\UAA\Services\Otp
 * @author samark chisanguan <samarkchsngn@gmail.com>
 */
interface OtpInterface
{
    /**
     * @param array $params
     * @return mixed
     */
    public function getOTPRequest($params = array());

    /**
     * @param array $params
     * @return mixed
     */
    public function validateOTP($params = array());
}
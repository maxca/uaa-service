<?php

namespace Samark\UAA\Services;

/**
 * Class AbstractBaseService
 * @package Samark\UAA\Services
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
abstract class AbstractBaseService implements BaseServiceInterface
{
    use DataCurlGuzzleTrait;

    /**
     * Setting endpoint
     * @var string
     */
    protected $endpoint;

    /**
     * Setting config endpoint
     * @var string
     */
    protected $configEndpoint;

    /**
     * AbstractBaseService constructor.
     */
    public function __construct()
    {
        $this->endpoint = $this->getEndpoint();
    }

    /**
     * Getting endpoint
     * @return mixed
     */
    protected function getEndpoint()
    {
        return $this->getBaseEndpoint() . '/' .
            config(PACKAGE_NAME . '.endpoint.' . $this->configEndpoint);
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    protected function getBaseEndpoint()
    {
        return config(PACKAGE_NAME . '.endpoint.base-url');
    }

    /**
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params = array(), $headers = array())
    {
        return $this->curlGet($this->endpoint, $params, $headers);
    }

    /**
     * @param int $id
     * @param array $header
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete(int $id, $header = array())
    {
        return $this->curlDelete($this->endpoint . "/{$id}", $header);
    }

    /**
     * @param int $id
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(int $id, $params = array(), $headers = array())
    {
        return $this->curlPut($this->endpoint, $params, $headers);
    }

    /**
     * @param int $id
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function detail(int $id, $params = array(), $headers = array())
    {
        return $this->curlGet($this->endpoint . "/{$id}", $params, $headers);
    }

    /**
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create($params = array(), $headers = array())
    {
        return $this->curlPost($this->endpoint, $params, $headers);
    }

    /**
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function callGet($params = array(), $headers = array())
    {
        return $this->curlGet($this->endpoint, $params, $headers);
    }


}
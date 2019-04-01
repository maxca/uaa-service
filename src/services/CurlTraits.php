<?php

namespace Samark\UAA\Services;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7;
use Exception;

/**
 * Trait DataCurlGuzzleTrait
 * @package App\Services\DataProvider
 * @author samark chisanguan <samarkchsngn@gmail.com>
 */
trait DataCurlGuzzleTrait
{

    /**
     * @param string $method
     * @param $endpoint
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function curlCall($method = 'get', $endpoint, $params = [], $headers = [])
    {
        $options                = [];
        $options['headers']     = [
            'Accept'        => 'application/json',
            'Authorization' => 'Bearer ' . request()->header('Authorization'),
        ];
        $options['headers']     = !empty($headers) ? $headers : $options['headers'];
        $options['http_errors'] = false;
        $options                = array_merge($options, $headers);
        switch ($method) {
            case 'get' :
                $options['query'] = $params;
                break;
            case 'post' :
                $options['form_params'] = $params;
                break;
            default:
                $options['form_params'] = $params;
                break;
        }
        try {

            $client     = new GuzzleHttpClient();
            $apiRequest = $client->request($method, $endpoint, $options);

            $response = json_decode($apiRequest->getBody()->getContents(), true);
            // add debug when need
            $this->debug($method, $endpoint, $params, $headers, $response);
            return $response;
        } catch (ClientException $exception) {
            throw new Exception($exception->getMessage(), $exception->getCode());
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage(), 500);
        }

    }

    /**
     * @param $endpoint
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function curlGet($endpoint, $params = [], $headers = [])
    {
        return $this->curlCall('get', $endpoint, $params, $headers);
    }

    /**
     * @param $endpoint
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function curlPost($endpoint, $params = [], $headers = [])
    {
        return $this->curlCall('post', $endpoint, $params, $headers);
    }

    /**
     * @param $endpoint
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function curlPut($endpoint, $params = [], $headers = [])
    {
        return $this->curlCall('put', $endpoint, $params, $headers);
    }

    /**
     * @param $endpoint
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function curlDelete($endpoint, $params = [], $headers = [])
    {
        return $this->curlCall('delete', $endpoint, $params, $headers);
    }

    /**
     * @param $endpoint
     * @param array $params
     * @param array $headers
     */
    public function curlUpload($endpoint, $params = [], $headers = [])
    {

    }

    /**
     * @param string $method
     * @param $endpoint
     * @param array $params
     * @param array $headers
     * @param $response
     */
    private function debug($method = 'get', $endpoint, $params = [], $headers = [], $response)
    {
        if (request()->has('debug')) {
            dump('$method::', $method);
            dump('$endpoint::', $endpoint);
            dump('$params::', $params);
            dump('$headers::', $headers);
            dump('response::', $response);
        }
    }


}
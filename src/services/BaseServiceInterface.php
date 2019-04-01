<?php

namespace Samark\UAA\Services;

/**
 * Interface BaseServiceInterface
 * @package Samark\UAA\Services
 * @author samark chisanguan <samarkchsngn@gmail.com>
 */
interface BaseServiceInterface
{

    /**
     * @param array $params
     * @param array $headers
     * @return mixed
     */
    public function list($params = array(), $headers = array());

    /**
     * @param int $id
     * @param array $headers
     * @return mixed
     */
    public function delete(int $id, $headers = array());

    /**
     * @param int $id
     * @param array $params
     * @param array $headers
     * @return mixed
     */
    public function update(int $id, $params = array(), $headers = array());

    /**
     * @param int $id
     * @param array $params
     * @param array $headers
     * @return mixed
     */
    public function detail(int $id, $params = array(), $headers = array());

    /**
     * @param array $params
     * @param array $headers
     * @return mixed
     */
    public function create($params = array(), $headers = array());


}
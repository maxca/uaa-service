<?php

namespace Samark\UAA\Services;

/**
 * Class BaseService
 * @package Samark\UAA\Services
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class BaseService extends AbstractBaseService
{

    /**
     * Size of a page
     * @var integer
     */
    protected $size = 30;

    /**
     * Page number of the requested page
     * @var integer
     */
    protected $page = 1;

    /**
     * Sorting criteria in the format: property(,asc|desc).
     * Default sort order is ascending.
     * Multiple sort criteria are supported.
     * @var string
     */
    protected $sort = 'asc';

    /**
     * @param array $params
     * @param array $headers
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params = array(), $headers = array())
    {
        $this->bundleParams($params);
        return parent::list($params, $headers);
    }

    /**
     * Bundle params with size, page, sort
     * @param $params
     */
    protected function bundleParams(&$params)
    {
        $params['size'] = isset($params['size']) ? $params['size'] : $this->size;
        $params['page'] = isset($params['page']) ? $params['page'] : $this->page;
        $params['sort'] = isset($params['sort']) ? $params['sort'] : $this->sort;
    }
}
<?php

namespace Samark\UAA;

use Arcanedev\Support\PackageServiceProvider;

/**
 * Class UaaServiceProvider
 * @package Samark\UAA
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class UaaServiceProvider extends PackageServiceProvider
{

    /**
     * Vendor name.
     *
     * @var string
     */
    protected $vendor = 'samarkchaisanguan';

    /**
     * Package name.
     *
     * @var string
     */
    protected $package = 'uaa-service';

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Booting Service provider.
     */
    public function boot()
    {
        $this->publishConfig();
    }
}
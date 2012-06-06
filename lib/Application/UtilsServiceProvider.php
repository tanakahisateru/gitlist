<?php

namespace Application;

use Silex\Application;
use Silex\ServiceProviderInterface;

class UtilsServiceProvider implements ServiceProviderInterface
{
    /**
     * Register the Utils class on the Application ServiceProvider
     * 
     * @param Application $app Silex Application
     * @return Utils Instance of the Utils class
     */
    public function register(Application $app)
    {
        $app['utils'] = function () use ($app) {
            return new Utils;
        };
    }

    /**
     * Bootstraps the application.
     *
     * @param Application $app Silex Application
     */
    function boot(Application $app)
    {
    }
}
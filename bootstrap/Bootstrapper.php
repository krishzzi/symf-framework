<?php

use Aloraytech\Framework\Container;
class Bootstrapper
{

    public function getRoutes()
    {
//        $routes=
//        $routesList = [
//            'api' => __DIR__.'../routes/api.php',
//            'web' => __DIR__.'../routes/web.php',
//        ];
//        foreach ($routesList as $route)
//        {
//            require_once $route;
//        }
        return require dirname(__DIR__,1).'/routes/web.php';
    }

    public function getContainer()
    {
        $container = new Container($this->getRoutes());
        return $container->get();
    }


}
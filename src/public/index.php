<?php
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

try {
    $loader = new Loader();
    $loader->registerDirs(array(
        '../app/controllers/',
        '../app/models/'
    ))->register();

    $di = new FactoryDefault();
    $di->set('view', function () {
        $view = new View();
        $view->setViewsDir('../app/views/');
        $view->registerEngines([
            '.volt' => function($view, $di) {
                $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
                $volt->setOptions(['compiledPath' => '../app/cache/']);
                return $volt;
            }
        ]);

        return $view;
    });
    $di->set('url', function () {
        $url = new UrlProvider();
        $url->setBaseUri('/');
        return $url;
    });

    $application = new Application($di);
    echo $application->handle()->getContent();
}
catch (\Exception $e) {
     echo "PhalconException: ", $e->getMessage();
}

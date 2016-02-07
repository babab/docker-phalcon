<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $extensions = strtr(implode(', ', get_loaded_extensions()), array(
            'phalcon' => '<span class="phalcon text-success">phalcon</span>',

            'mbstring' => '<span class="tag text-success">mbstring</span>',
            'PDO' => '<span class="tag text-success">PDO</span>',
            'pdo_mysql' => '<span class="tag text-success">pdo_mysql</span>',
            'pdo_sqlite' => '<span class="tag text-success">pdo_sqlite</span>',
            'mongo' => '<span class="tag text-success">mongo</span>',
            'mcrypt' => '<span class="tag text-success">mcrypt</span>',
            'openssl' => '<span class="tag text-success">openssl</span>',
            'curl' => '<span class="tag text-info">curl</span>',
            'json' => '<span class="tag text-info">json</span>',
            'gettext' => '<span class="tag text-info">gettext</span>',
            'memcached' => '<span class="tag text-info">memcached</span>',
        ));
        $this->view->extensions = $extensions;
    }

    public function phpinfoAction()
    {
        phpinfo();
    }
}

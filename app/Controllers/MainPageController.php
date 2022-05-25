<?php
namespace Controllers;

use Classes\Router;

class MainPageController extends BaseController
{
    public function __construct($params = [])
    {
        parent::__construct($params);

        $this->title = 'MainPage';
        $this->addContent('links', Router::getRoutesLinks());
        $this->templateFileName = 'main.html.twig';
    }

    function beforeRender() {}
}

<?php
namespace Controllers;

use Classes\Router;

class MainPageController extends BaseController
{
    public function __construct()
    {
        $this->title = 'MainPage';
        $this->content = ['links' => Router::getRoutesLinks()];
        $this->templateFileName = 'main.html.twig';
    }

    function beforeRender() {}
}

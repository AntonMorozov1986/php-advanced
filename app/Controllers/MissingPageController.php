<?php
namespace Controllers;

class MissingPageController extends BaseController
{
    public function __construct($params = [])
    {
        parent::__construct($params);

        $this->title = 'Not found';
        $this->templateFileName = 'missing.html.twig';
        $this->content = [
            'subtitle' => '404 - такой страницы нет',
            'link' => [
                'href' => '/',
                'text' => 'Вернуться на Главную'
            ]
        ];
    }

    function beforeRender() {}
}

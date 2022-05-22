<?php
namespace Controllers;

class MissingPageController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Not found';
        $this->templateFileName = 'missing.html.twig';
        $this->content = [
            'subtitle' => '404 - такой страницы нет',
            'link' => [
                'href' => '/',
                'text' => 'Вернуться назад'
            ]
        ];
    }
}

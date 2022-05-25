<?php
namespace Controllers;

use Classes\Router;

class LogoutController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->title = 'Logout';
        $this->templateFileName = 'logout.html.twig';
        $this->content = [
            'subtitle' => 'Вы успешно вышли',
            'link' => [
                'href' => '/',
                'text' => 'Вернуться на Главную'
            ]
        ];
    }

    function beforeRender() {
        session_unset();
        session_destroy();
        setcookie('PHPSESSID', '', time() - 3600);
    }
}

<?php
namespace Controllers;

use Classes\Router;
use Database\Database;
use PDOException;

class RegisterController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Register Page';
        $this->templateFileName = 'auth.html.twig';
        $this->content = [
            'inputs' => [
                [
                    'type' => 'text',
                    'name' => 'name',
                ],
                [
                    'type' => 'text',
                    'name' => 'email',
                ],
                [
                    'type' => 'password',
                    'name' => 'password',
                ],
                [
                    'type' => 'submit',
                    'value' => 'Зарегистрироваться',
                ],
            ],
        ];
    }

    function beforeRender()
    {
        if (Router::getRequestMethode() === 'POST') {
            $this->handlePostRequest();
        }
    }

    public function handlePostRequest()
    {
        try {
            $this->createNewUser();
            $this->content['result'] = 'Вы успешно зарегистрировались';
        } catch (PDOException $exception) {
            $this->content['result'] = $exception->getMessage();
        }
    }

    private function createNewUser()
    {
        $userData = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
        ];

        $sqlQuery = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (:name, :email, :password);";

        $db = Database::getInstance()->getDb();
        $request = $db->prepare($sqlQuery);
        $request->execute($userData);
    }
}

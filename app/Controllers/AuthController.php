<?php
namespace Controllers;

use Database\Database;
use PDOException;

class AuthController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Auth Page';
        $this->templateFileName = 'auth.html.twig';
        $this->content = [
            'inputs' => [
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
                    'value' => 'Войти',
                ],
            ],
        ];
//
//        if ($this->isPostRequest()) {
//            $this->signIn();
//            $this->content['result'] = 'Вы успешно вошли';
//        }
    }

    public function handlePostRequest()
    {
        $this->signIn();
        $this->content['result'] = 'Вы успешно вошли';
    }

    private function signIn()
    {
        try {
            var_dump("signIn");
            $userData = [
                'email' => $_POST['email']
            ];
            var_dump($userData);


            $db = Database::getInstance()->getDb();


            $sqlQuery = "SELECT * FROM `users` WHERE email = :email";

            $request = $db->prepare($sqlQuery);
            $request->execute(['email' => $_POST['email']]);
            $result = $request->fetchAll(\PDO::FETCH_ASSOC);
            var_dump($result);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
            die();
        }

    }
}

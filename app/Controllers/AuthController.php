<?php
namespace Controllers;

use Database\Database;
use PDO;
use Exception;

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
    }

    public function handlePostRequest()
    {
        try {
            $this->signIn();
            $this->content['result'] = 'Вы успешно вошли';
        } catch (Exception $exception) {
            echo "Что-то пошло не так";
        }

    }

    private function signIn()
    {
        try {
            $db = Database::getInstance()->getDb();

            $sqlQuery = "SELECT * FROM `users` WHERE email = :email";

            $request = $db->prepare($sqlQuery);
            $request->execute(['email' => $_POST['email']]);
            $result = $request->fetch(PDO::FETCH_ASSOC);
            $this->checkPassword($_POST['password'], $result['password']);
        } catch (Exception $exception) {
            echo $exception->getMessage() . "</br>";
            throw $exception;
        }

    }

    private function checkPassword($pass, $hash)
    {
        $result = password_verify($pass, $hash);
        if (!$result) {
            throw new Exception('login or password not correct');
        }
    }
}

<?php
namespace Controllers;

use Classes\Router;
use Database\Database;
use PDO;
use Exception;

class AuthController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

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

    function beforeRender()
    {
        if (Router::getRequestMethode() === 'POST') {
            $this->handlePostRequest();
        }
    }

    public function handlePostRequest()
    {
        try {
            $user = $this->signIn();
            $this->content['result'] = "{$user['name']}, Вы успешно авторизовались";
            setcookie('user', $user['name'], time() + 36000, '/');
        } catch (Exception $exception) {
            $this->content['result'] = $exception->getMessage();
        }

    }

    /**
     * @throws Exception
     */
    private function signIn()
    {
        $db = Database::getInstance()->getDb();

        $sqlQuery = "SELECT * FROM `users` WHERE email = :email";

        $request = $db->prepare($sqlQuery);
        $request->execute(['email' => $_POST['email']]);
        $result = $request->fetch(PDO::FETCH_ASSOC);
        $this->checkPassword($_POST['password'], $result['password']);
        return $result;
    }

    /**
     * @throws Exception
     */
    private function checkPassword($pass, $hash)
    {
        $result = password_verify($pass, $hash);
        if (!$result) {
            throw new Exception('login or password not correct');
        }
    }
}

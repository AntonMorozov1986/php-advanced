<?php
namespace Controllers;

use Classes\Router;
use Exception;
use Config\Config;

use Models\User;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class BaseController
{
    protected string $title = '';
    protected string $templateFileName = '';
    protected array $content = [];
    private User $user;

    abstract function beforeRender();

    public function __construct()
    {
        $this->initUser();
    }

    public function render() {
        $this->beforeRender();
        $menu = ['menu' => Router::getRoutesLinks()];
        $this->content = array_merge($this->content, $menu);
        var_dump($_SESSION);
        echo $this->getTemplate();
    }

    protected function getTemplate()
    {
        try {
            $loader = new FilesystemLoader(Config::getRoot() . '/templates');
            $twig = new Environment($loader);
            $twigOptions = array_merge(['title' => $this->title], $this->content);
            return $twig->render($this->templateFileName, $twigOptions);
        } catch (Exception $e) {
            die ('ERROR: ' . $e->getMessage());
        }
    }

    protected function addContent(string $fieldName, $fieldValue)
    {
        $this->content = array_merge($this->content, [$fieldName => $fieldValue]);
    }

    protected function initUser()
    {
        if ($_SESSION['user']) {
            $this->user = new User($_SESSION['user']);
            $this->addContent('user', $this->user->getName());
        }
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}

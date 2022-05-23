<?php
namespace Controllers;

use Classes\Router;
use Exception;
use Config\Config;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class BaseController
{
    protected string $title;
    protected string $templateFileName;
    protected array $content;

    abstract function beforeRender();

    public function render() {
        $this->beforeRender();
        $menu = ['menu' => Router::getRoutesLinks()];
        $this->content = array_merge($this->content, $menu);
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
}

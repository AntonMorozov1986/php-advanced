<?php
namespace Controllers;

use Exception;

use Classes\Router;
use Models\Cart;
use Models\GoodsList;

class GoodController extends BaseController
{
    public function __construct($params)
    {
        parent::__construct($params);
        $this->title = 'GoodPage';
        $this->templateFileName = 'good_page.html.twig';
        $this->addContent('good', GoodsList::getGoodById($this->params[0]));
    }

    function beforeRender() {
        if (Router::getRequestMethode() === 'POST') {
            try {
                $this->addGoodToCart();
                $this->addContent('result', 'Товар добавлен');
            } catch (Exception $exception) {
                $this->addContent('result', $exception->getMessage());
            }
        }
    }

    private function addGoodToCart() {
        Cart::add($this->getUser()->getId(), $_POST['good-id']);
    }
}

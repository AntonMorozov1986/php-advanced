<?php
namespace Controllers;

use Classes\Router;
use Exception;
use Models\Cart;

class CartController extends BaseController
{
    public function __construct($params)
    {
        parent::__construct($params);

        $this->title = 'Cart';
        $this->templateFileName = 'cart.html.twig';

        $catalogContent = [
            'cart' => $this->getCartList(),
        ];
        foreach ($catalogContent as $fieldName => $fieldValue) {
            $this->addContent($fieldName, $fieldValue);
        }
        var_dump($this->content);
    }

    private function getCartList()
    {
        try {
            return Cart::getCart($this->getUser()->getId());
        } catch (Exception $exception) {
            return [];
        }
    }

    protected function beforeRender() {
        if (Router::getRequestMethode() === 'POST') {
            try {
                $this->deleteGoodFromCart();
                $this->addContent('cart', $this->getCartList());
                $this->addContent('result', 'Товар удален');
            } catch (Exception $exception) {
                $this->addContent('result', $exception->getMessage());
            }
        }
    }

    private function deleteGoodFromCart() {
        Cart::delete($this->getUser()->getId(), $_POST['cart-id']);
    }
}

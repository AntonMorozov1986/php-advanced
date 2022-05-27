<?php
namespace Controllers;

use Classes\Router;
use Exception;
use Models\Cart;
use Models\GoodsList;

class CatalogController extends BaseController
{
    private int $goodsPerPage = 6;

    public function __construct($params)
    {
        parent::__construct($params);

        $this->title = 'Catalog';
        $this->templateFileName = 'catalog.html.twig';
        $catalogContent = [
            'catalogPath' => '/catalog',
            'goods' => $this->getGoodsList(),
            'pagesQuantity' => $this->getPagesQuantity(),
            'currentPage' => $this->getCurrentPage(),
        ];
        foreach ($catalogContent as $fieldName => $fieldValue) {
            $this->addContent($fieldName, $fieldValue);
        }
    }

    private function getGoodsList()
    {
        $startId = (($this->getCurrentPage() - 1) * $this->goodsPerPage) + 1;
        return GoodsList::some($startId, $this->goodsPerPage);
    }

    private function getPagesQuantity(): int
    {
        return (int) ceil(GoodsList::allQuantity() / $this->goodsPerPage);
    }

    private function getCurrentPage(): int
    {
        if (isset($_GET['page'])) {
            return (int) $_GET['page'];
        } else {
            return 1;
        }
    }

    protected function beforeRender() {
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

<?php
namespace Controllers;

use Models\GoodsList;

class CatalogController extends BaseController
{
    private int $goodsPerPage;
    private int $currentPage;

    public function __construct($goodsPerPage = 6)
    {
        parent::__construct();

        $this->goodsPerPage = $goodsPerPage;
        $this->currentPage = $this->getCurrentPage();
        $this->title = 'Catalog';
        $this->templateFileName = 'catalog.html.twig';
        $this->content = [
            'catalogPath' => '/catalog',
            'goods' => $this->getGoodsList(),
            'pagesQuantity' => $this->getPagesQuantity(),
            'currentPage' => $this->currentPage,
        ];
    }

    private function getGoodsList()
    {
        $startId = (($this->currentPage - 1) * $this->goodsPerPage) + 1;
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

    function beforeRender() {}
}

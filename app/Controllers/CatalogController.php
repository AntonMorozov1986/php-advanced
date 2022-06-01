<?php
namespace Controllers;

use Models\GoodsList;

class CatalogController extends BaseController
{
    private int $goodsPerPage;

    public function __construct($goodsPerPage = 6)
    {
        parent::__construct();

        $this->goodsPerPage = $goodsPerPage;
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

    function beforeRender() {}
}

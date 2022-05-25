<?php
namespace Controllers;

use Models\GoodsList;

class GoodController extends BaseController
{
    private int $goodsPerPage = 6;

    public function __construct($params)
    {
        parent::__construct($params);

//        $this->goodsPerPage = $goodsPerPage;
        $this->title = 'GoodPage';
        $this->templateFileName = 'good_page.html.twig';
        var_dump($this->params);
        $this->addContent('good', GoodsList::getGoodById($this->params[0]));
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

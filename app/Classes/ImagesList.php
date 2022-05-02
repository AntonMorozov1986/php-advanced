<?php
namespace Classes;

use Config\Config;
use Traits\SingletoneTrait;

class ImagesList
{
    use SingletoneTrait;

    private array $images = [];

    public function instanceInit()
    {
        $this->initImages();
    }

    private static function getFilesList($path)
    {
        return scandir(Config::getRoot() . '/public/images/small');
    }

    private function initImages()
    {
        foreach (self::getFilesList(Config::getRoot() . '/public/images/small') as $key => $value) {
            if ($value === '.' || $value === '..') {
                continue;
            }
            $this->images[] = [
                'id' => $key,
                'src' => $value
            ];
        }
    }

    public function getImages()
    {
        return $this->images;
    }

}

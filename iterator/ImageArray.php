<?php

namespace Iterator;

use GdImage;
/**
 * Итератор картинок
 */
class ImageArray implements IAggregator
{   
    private $images = [];    
    
    public function getIterator():IIterator
    {
        return new ImageIterator($this);
    }
    public function Count()
    {
        return count($this->images);
    }
    public function get(int $index):Image
    {
        return $this->images[$index];
    }
    public function getItems():array
    {
        return $this->images;
    }

    public function addImage(Image $image):void
    {
        $this->images[] = $image;
    }
}


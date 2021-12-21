<?php

namespace Iretator;
use GdImage;

class Image
{
    private string $path;
    private \DateTime $createDate;
    private Author $author;
    public function __construct(string $path)
    {
        $this->path = $path;    
        $this->createDate = new \DateTime();
    }

    public function getPath():string
    {
        return $this->path;
    }
    public function getCreateDate():\DateTime
    {
        return $this->createDate;
    }   
    public function getGdImage():GdImage
    {
        return imagejpeg(file_get_contents($this->path));
    }
}
<?php

namespace Iretator;
use GdImage;

class Image
{
    private string $path;
    private \DateTime $createDate;
    private Author $author;
    public function __construct(string $path, Author $author)
    {
        $this->path = $path;
        $this->author = $author;
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
    public function getAuthor():Author
    {
        return $this->author;
    }    
    public function getGdImage():GdImage
    {
        return imagejpeg(file_get_contents($this->path));
    }
}
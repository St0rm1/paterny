<?php

namespace Prototype;

class Author
{
    private $name;

    /**
     * @var Post[]
     */
    private $pages = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Post $page): void
    {
        $this->pages[] = $page;
    }

    public function getPages():array
    {
        return $this->pages;
    }
    
    public function getName():string
    {
        return $this->name;
    }

}
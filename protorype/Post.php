<?php

namespace Prototype;

/**
 * Прототип.
 */
class Post
{
    private $title;
    private $id;
    private $body;
    private $files = [];    
    /**
     * @var Author
     */
    private $author;

    private $comments = [];

    /**
     * @var \DateTime
     */
    private $date;

    public function __construct(string $title,  Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = new \DateTime();
        $this->id =  uniqid("page_",true);
    }
    public function getFiles():array
    {
        return $this->files;
    }
    public function removeFile(int $index):void
    {
        unset($this->files[$index]);
    }
    public function addFile(string $file):void
    {
        $this->files[]=$file;
    }
    public function getAuthor():Author
    {
        return $this->author;
    }
    public function setBody(string $body):void
    {
        $this->body = $body;
    }
    public function getBody():string
    {
        return $this->body;
    }
    public function getDate():\DateTime
    {
        return $this->date;
    }
    public function getId():string
    {
        return $this->id;
    }
    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }
    public function getCommments():array
    {
        return $this->comments;
    }

    /**
     * Метод вызываемый при клонировнии объекта, возвращающий клон данного объекта с изменёнными полями
     */
    public function __clone()
    {        
        $this->title = "Копия поста '" . $this->title."'";
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime();
        $this->id = uniqid("page_",true);
    }
}
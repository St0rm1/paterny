<?php

namespace Iterator;

use GdImage;
/**
 * Итератор картинок
 */
class ImageArray implements \Iterator
{

    protected array $images = [];

    /**
     * Текущий элемент, который возвращается на каждой итерации.
     *
     * @var array
     */
    protected $currentElement = null;

    /**
     * Счётчик строк.
     *
     * @var int
     */
    protected $position = 0;
    public function addImage(Image $image)
    {
        $this->images[] = $image;
    }
    /**
     * Этот метод сбрасывает указатель файла.
     */
    public function rewind(): void
    {
        $this->position = 0;        
    }

    /**
     * Этот метод возвращает текущую Картинку
     *
     * 
     */
    public function current(): Image
    {        
        return $this->images[$this->position];
    }

    /**
     * Этот метод возвращает номер текущей строки.
     *
     * @return int Номер текущей строки.
     */
    public function key(): int
    {
        return $this->position;
    }

    /**
     * Переводит указатель на 1
     */
    public function next()
    {
        $this->position++;
    }

    /**
     * Этот метод проверяет, является ли следующая строка допустимой.
     *
     * @return bool Если следующая строка является допустимой.
     */
    public function valid(): bool
    {
        return  $this->currentElement instanceof Image && isset($this->images[$this->position]);
    }
}


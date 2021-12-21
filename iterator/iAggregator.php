<?php
namespace Iterator;
interface IAggregator
{
    public function getIterator():IIterator;
    public function getCount():int;
    public function addImage($item);
    public function getItems():array;
    public function get(int $index):Image;

}
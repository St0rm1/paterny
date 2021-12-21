<?php
namespace Iterator;
interface IIterator
{
    public function First():Image;
    public function Next():Image;
    public function IsDone():bool;
    public function CurrentImage():Image;  
}
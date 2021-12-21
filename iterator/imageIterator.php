<?php
namespace Iterattor;
class ImageIterator implements IIterator
{
    private IAggregator $aggregator;
    private int $index = 0;
    public function __construct(IAggregator $aggregator)
    {
        $this->aggregator = $aggregator;
    }
    public function First():Image
    {
        return $this->aggregator->get(0);
    }
    public function Next():Image
    {
        $this->index++;
        if($this->index<$this->aggregator->getCount())
        {
            return $this->aggregator->get($this->index);
        }
        return null;
    }
    public function CurrentImage():Image
    {
        return $this->aggregator->get($this->index);
    }
    public function IsDone():bool
    {
        return $this->index>= $this->aggregator->getCount();
    }
}
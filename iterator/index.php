<?php
namespace Iterator;

use GdImage;

class main
{
    public function run():void
    {
        $aggregator = new ImageArray();
        $aggregator->addImage(new Image("./iomage1.png"));
        $aggregator->addImage(new Image("./iomage2.png"));
        $aggregator->addImage(new Image("./iomage3.png"));
        $aggregator->addImage(new Image("./iomage4.png"));
        $aggregator->addImage(new Image("./iomage5.png"));
        $iterator = $aggregator->getIterator();
        $image = $iterator->First();

        while(!$iterator->IsDone())
        {
            var_dump($image);
            $image = $iterator->Next();
        }
    }
}
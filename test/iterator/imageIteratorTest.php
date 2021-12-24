<?php
namespace Test\Iterator;

use PHPUnit\Framework\TestCase;
use Iterator;
use GdImage;

class ImageIteratorTest extends Testcase 
{
    public function testCurrentImage()
    {
        $aggregator = new ImageArray();
        $aggregator->addImage(new Image("./iomage1.png"));
        $aggregator->addImage(new Image("./iomage2.png"));
        $aggregator->addImage(new Image("./iomage3.png"));
        $aggregator->addImage(new Image("./iomage4.png"));
        $aggregator->addImage(new Image("./iomage5.png"));
        $iterator = $aggregator->getIterator();  
        $this->assertEquels("./iomage1.png",$iterator->CurrentImage()->getPath());

    }
    public function testNext()
    {
        $aggregator = new ImageArray();
        $aggregator->addImage(new Image("./iomage1.png"));
        $aggregator->addImage(new Image("./iomage2.png"));
        $aggregator->addImage(new Image("./iomage3.png"));
        $aggregator->addImage(new Image("./iomage4.png"));
        $aggregator->addImage(new Image("./iomage5.png"));
        $iterator = $aggregator->getIterator();
        $iterator->Next();
        $iterator->Next();

        $this->assertEquels("./iomage3.png",$iterator->CurrentImage()->getPath());

    }
    public function testFirst()
    {
        $aggregator = new ImageArray();
        $aggregator->addImage(new Image("./iomage1.png"));
        $aggregator->addImage(new Image("./iomage2.png"));
        $aggregator->addImage(new Image("./iomage3.png"));
        $aggregator->addImage(new Image("./iomage4.png"));
        $aggregator->addImage(new Image("./iomage5.png"));
        $iterator = $aggregator->getIterator();
        $iterator->Next();
        $iterator->Next();

        $this->assertEquels("./iomage1.png",$iterator->First()->getPath());

    }

}
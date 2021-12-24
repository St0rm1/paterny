<?php 
namespace Test\Iterator;

use PHPUnit\Framework\TestCase;
use Iterator;
use GdImage;

class ImageArrayTest extends Testcase 
{
    public function testCreate()
    {
        $imageArray = new ImageArray();

        $this->assertInstanceOf(ImageArray::class, $imageArray);
    }

    public function testGetIterator()
    {
        $imageArray = new ImageArray();
        $iterator = $imageArray->getIterator();
        $this->assertInstanceOf(IIterator::class,$iterator);
    }
    public function testCount()
    {
        $imageArray = new ImageArray();        
        $imageArray->addImage(new Image("./iomage1.png"));
        $imageArray->addImage(new Image("./iomage2.png"));
        $imageArray->addImage(new Image("./iomage3.png"));
        $imageArray->addImage(new Image("./iomage4.png"));
        $imageArray->addImage(new Image("./iomage5.png"));

        $this->assertEquels(5,$imageArray->Count());

    }
    public function testGet()
    {
        $imageArray = new ImageArray();        
        $imageArray->addImage(new Image("./iomage1.png"));
        $imageArray->addImage(new Image("./iomage2.png"));
        $imageArray->addImage(new Image("./iomage3.png"));
        $imageArray->addImage(new Image("./iomage4.png"));
        $imageArray->addImage(new Image("./iomage5.png"));
        $this->assertEquels("./iomage2.png",$imageArray->get(1)->getPath());
    }

    public function testGetItems()
    {
        $imageArray = new ImageArray();        
        $imageArray->addImage(new Image("./iomage1.png"));
        $imageArray->addImage(new Image("./iomage2.png"));
        $imageArray->addImage(new Image("./iomage3.png"));
        $imageArray->addImage(new Image("./iomage4.png"));
        $imageArray->addImage(new Image("./iomage5.png"));
        $items = $imageArray->getItems();
        $this->assertEquels(true, is_array($items));
        $this->assertEquels("./iomage4.png",$items[3]->getPath());
    }
    
}
<?php 
namespace Test\Iterator;

use PHPUnit\Framework\TestCase;
use Iterator;
use GdImage;

class ImageIteratorTest extends Testcase 
{
    public function testCreate()
    {
        $imageArray = new ImageArray();

        $this->assertInstanceOf(ImageArray::class, $imageArray);
    }

    public function testKey()
    {
        $imageArray = new ImageArray();
        $image = new Image("./image1.jpg",new Author('test'));
        $imageArray->addImage($image);
        $this->assertEquels(0,$imageArray->key());
    }
    public function testNext()
    {
        $imageArray = new ImageArray();
        $image = new Image("./image1.jpg",new Author('test'));
        $imageArray->addImage($image);
        $imageArray->next();
        $this->assertEquels(1,$imageArray->key());
    }
    public function testCurrent()
    {
        $imageArray = new ImageArray();
        $image = new Image("./image1.jpg",new Author('test'));
        $imageArray->addImage($image);
        $image = new Image("./image2.jpg",new Author('test'));
        $imageArray->addImage($image);

        $this->assertEquels('./image1.jpg',$imageArray->current()->getPath());
        $imageArray->next();
        $this->assertEquels('./image2.jpg',$imageArray->current()->getPath());
    }

    public function testRewind()
    {
        $imageArray = new ImageArray();
        $image = new Image("./image1.jpg",new Author('test'));
        $imageArray->addImage($image);
        $image = new Image("./image2.jpg",new Author('test'));
        $imageArray->addImage($image);

        $this->assertEquels(0,$imageArray->key());

        $imageArray->next();
        $this->assertEquels(1,$imageArray->key());

        $imageArray->rewind();
        $this->assertEquels(0,$imageArray->key());
    }
    
}
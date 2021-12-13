<?php 
namespace Test\Iterator;

use PHPUnit\Framework\TestCase;
use Iterator;
use GdImage;


class ImageTest extends TestCase
{
    public function tetsGetPath()
    {
        $image = new Image("./image1.jpg",new Author('test'));
        $this->assertEquels('./image1.jpg',$image->getPath());
    }
    public function testGetAuthor()
    {
        $image = new Image("./image1.jpg",new Author('test'));
        $this->assertInstanceOf(Author::class,$image->getAuthor());
        $this->assertEquels('test',$image->getAuthor()->getName());
    }

    public function testGetGdImage()
    {
        $image = new Image("./image1.jpg",new Author('test'));
        $this->assertInstanceOf(GdImage::class,$image);
    }

}

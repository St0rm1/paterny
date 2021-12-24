<?php 
namespace Test\Iterator;

use PHPUnit\Framework\TestCase;
use Prototype;

class PostTest extends TestCase
{
    public function testCreate()
    {
        $author = new Author('test');
        $post = new Post('testPost',$author);

        $this->assertInstanceOf(Post::class,$post);
    }
    public function setBody()
    {
        $author = new Author('test');
        $post = new Post('testPost',$author);

        $post->setBody("testBody");

        $this->assertEquels('testBody',$post->getBody());
    }

    public function testAddComment()
    {
        $author = new Author('test');
        $post = new Post('testPost',$author);
        $post->addComment('commant1');

        $this->assertEquels('commant1',$post->getComments()[0]);
    }

    public function testClone()
    {
        $author = new Author('test');
        $post1 = new Post('testPost',$author);
        $post1->setBody("testBody");
        $post1->addComment('commant1');
        $post2 = $post1->Clone();

        $this->assertEquels('testBody',$post2->getBody());
        $this->assertEquels(1,count( $post1->getComments()));
        $this->assertEquels(0, count( $post2->getComments()));
    }
}
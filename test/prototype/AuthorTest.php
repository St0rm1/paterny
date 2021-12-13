<?php 
namespace Test\Iterator;

use PHPUnit\Framework\TestCase;
use Prototype;

class AuthorTest extends TestCase
{
    public function testCreateNewAuthor()
    {
        $author = new Author('test');
        $this->assertInstanceOf(Author::class,$author);
    }

    public function testGetPages()
    {
        $author = new Author('test');
        $post1 = new Post('testPost1',$author);
        $post2 = new Post('testPost2',$author);
        $post3 = new Post('testPost3',$author);

        $posts = $author->getPages();

        $this->assertEquels(3,count($posts));
        foreach($posts as $post)
        {
            $this->assertEquels('test',$post->getAuthor()->getName());
        }
    }   
}
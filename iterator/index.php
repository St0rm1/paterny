<?php
namespace Iterator;

use GdImage;

class main
{
    public function run():void
    {
        $imageArray = new ImageArray();
        $author = new Author('Joth');
        $imageArray->addImage(new Image("./image1.jpg",$author));

        foreach ($csv as $key => $row) {
            $image = $row->getGdImage();
            $createDate = $row->getCreateDate(); 
            $image->imagewebp();
            var_dump($createDate);
        }
    }
}
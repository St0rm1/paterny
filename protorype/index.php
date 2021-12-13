<?php

namespace Prototype;

class main
{
    public function run()
    {
        $author = new Author("Я");
        $firstPost = new Post("Мой первый пост", "Просто обычный пост ничего необычного.", $author);   

        $firstPost->addComment("Первый комментарий под первым постом");
        $firstPost->addComment("Второй комментарий под первым постом");
    

        $clonePost = clone $firstPost; 
        
        if(count($clonePost->getComments)===0)
        {
            echo "У этого поста ещё нет коментариев <br/>";
        }

        $clonePost->addComment("Комментарий под клонированным постом");
        
        print_r($draft);
    }
}
<?php

namespace App;

class EbookAdapter implements Book{
    
    private $ebook;

    public function __construct(Ebook $ebook)
    {
        $this->ebook = $ebook;
    }

    public function open_book(){
        $this->ebook->unlock();
    }

    public function open_page(int $page){
        $this->ebook->unlock_page($page);
    }

    public function turn_book(){
        $this->ebook->pressNext();
    }

    public function get_page() : int{
        return $this->ebook->getPage();
    }   
}
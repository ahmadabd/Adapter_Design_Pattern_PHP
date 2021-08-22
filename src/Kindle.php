<?php

namespace App;

class Kindle implements Ebook{
    
    private $page;
    
    public function unlock(){
        $this->page = 1;
    }

    public function unlock_page($page){
        $this->page = $page;
    }

    public function pressNext(){
        $this->page++;
    }

    public function getPage(): int{
        return $this->page;
    }
}
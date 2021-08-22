<?php

namespace App;

class PapperBook implements Book{
    private $page;

    public function open_book(){
        $this->page = 1;
    }
    
    public function open_page(int $page){
        $this->page = $page;
    }

    public function turn_book(){
        $this->page++;
    }

    public function get_page() : int{
        return $this->page;
    }
}
<?php

namespace App;

interface Book{
    public function open_book();
    public function open_page(int $page);
    public function turn_book();
    public function get_page() : int;
}
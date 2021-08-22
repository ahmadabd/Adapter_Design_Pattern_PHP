<?php

namespace App;

interface Ebook {
    public function unlock();

    public function unlock_page($page);

    public function pressNext();

    public function getPage(): int;
}
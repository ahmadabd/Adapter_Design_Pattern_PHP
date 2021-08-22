<?php

use App\EbookAdapter;
use App\Kindle;
use App\PapperBook;

require_once __DIR__.'/vendor/autoload.php';

ini_set('display_errors', 1);

// $book = new PapperBook;
// $book->open_page(3);
// $book->turn_book();
// $page = $book->get_page();

// $book = new Kindle;
// $book->unlock();
// $book->pressNext();
// $page = $book->getPage();

// Instead of calling each class methods sepratly:

// For run Kindle or all implemented class of Ebook interface 
$ebook = new Kindle;
$book = new EbookAdapter($ebook);

// For run PapperBook or all implemented class of Book
$book = new PapperBook;

$book->open_page(3);
$book->turn_book();
$page = $book->get_page();

var_dump($page);
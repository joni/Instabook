<?php

require_once(dirname(__FILE__) . '/../../models/BooksService.php');
require_once(dirname(__FILE__) . '/../../models/BooksParseService.php');

$query = "el señor de los anillos";

$books = BooksService::getInstance()->search($query);
$books = $books->toArray();


$response = BooksParseService::getInstance()->save($books[0]);
die(var_dump($books));
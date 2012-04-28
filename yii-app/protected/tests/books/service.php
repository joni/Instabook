<?php
echo PHP_EOL;echo PHP_EOL;

require_once(dirname(__FILE__) . '/../../models/BooksService.php');
require_once(dirname(__FILE__) . '/../../models/BooksParseService.php');

$query = "el señor de los anillos";

//$book = BooksParseService::getInstance()->get();

$book = new Book('e39f626a2d59cf99af86e0339c9606b0');

die( var_dump($book));



echo PHP_EOL;echo PHP_EOL;
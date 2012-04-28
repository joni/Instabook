<?php

require_once(dirname(__FILE__) . '/../../models/BooksService.php');

$query = "el señor de los anillos";

$service = BooksService::getInstance();
$books = $service->search($query);

die(var_dump($books));
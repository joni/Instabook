<?php
require_once(dirname(__FILE__) . '/../../models/BooksService.php');
$query = "cloud atlas";

$service = new BooksService();
$books = $service->search($query);

die(var_dump($books));
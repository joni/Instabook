<?php

require_once(dirname(__FILE__) . '/BooksCollection.php');
require_once(dirname(__FILE__) . '/Book.php');
require_once(dirname(__FILE__) . '/../vendors/parse.php');

/*
 * This file is part of the Instabook package.
 * 
 * Description of BooksService
 *
 * @author Daniel Gonzalez <daniel.gonzalez@freelancemadrid.es>
 * @file BooksService.php
 * @date 28 - Apr - 2012
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class BooksService
{

    private $goole_rest_api_search = null;
    private $collection = null;
    private static $instances = array();
    private $parse = null;

    protected function initialize()
    {
        $this->goole_rest_api_search = 'https://www.googleapis.com/books/v1/volumes';
        $this->collection = new BooksCollection();

        $this->parse = new parseRestClient(array(
                    'appid' => 'u5H31glPx0jAhIpud6NhnEMzCQhEEIPgH5yk10fm',
                    'restkey' => 'sBPGrYzBu2HKwZ6bCsg2HAGwBlj5rRDpjzXuuAwo'
                ));
    }

    final public static function getInstance()
    {

        $class = get_called_class();
        if (!isset(self::$instances[$class]))
        {
            self::$instances[$class] = new $class();
        }

        return self::$instances[$class];
    }

    public function __construct()
    {
        if (isset(self::$instances[get_called_class()]))
        {
            throw new Exception(" A " . get_called_class() . " instance already exist");
        }
        $this->initialize();
    }

    public function search($query)
    {
        $result = json_decode(file_get_contents($this->goole_rest_api_search . '?q=' . urlencode($query)));
        foreach ($result->items as $item)
        {
            $book = new Book();
            if (isset($item->selfLink))
            {
                $book->google_link = $item->selfLink;
            }
            if (isset($item->volumeInfo->title))
            {
                $book->title = $item->volumeInfo->title;
            }
            if (isset($item->volumeInfo->subtitle))
            {
                $book->title .= ' : ' . $item->volumeInfo->subtitle;
            }
            if (isset($item->volumeInfo->description))
            {
                $book->description = $item->volumeInfo->description;
            }
            if (isset($item->volumeInfo->authors[0]))
            {
                $book->author = $item->volumeInfo->authors[0];
            }
            if (isset($item->industryIdentifiers->categories[0]))
            {
                $book->category = $item->industryIdentifiers->categories[0];
            }
            $this->collection->add($book);
        }

        return $this->collection;
    }

    public function save(Book $book)
    {
        $params = array(
            'className' => 'Books',
            'object' => array(
                'title' => $book->title,
                'author' => $book->author,
                ''
            )
        );
        $request = $parse->create($params);
    }

}
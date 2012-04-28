<?php

/*
 * This file is part of the Instabook package.
 * 
 * Description of Book
 *
 * @author Daniel Gonzalez <daniel.gonzalez@freelancemadrid.es>
 * @file Book.php
 * @date 28 - Apr - 2012
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Book
{

    public $link = null;
    public $title = null;
    public $description = null;
    public $image = null;
    public $hash = null;
    public $vote = 0;
    public $category = null;
    public $author = null;

    public function save()
    {
        // ..
    }

    public function vote($vote = 1)
    {
        
    }

    public function __construct($hash = null)
    {
        if ($hash)
        {
            $this->hash = (string) $hash;
            if ($response = BooksParseService::getInstance()->get($this->hash))
            {
                foreach ($response as $key => $value)
                {
                    $this->$key = $value;
                }
                die(var_dump($this));
            }
        }
    }

}

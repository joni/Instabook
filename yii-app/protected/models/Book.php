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
    public $author = null;
    public $description = null;
    public $category = null;
    public $image = null;
    public $hash = null;

    public function save()
    {
        // ..
    }

    public function vote($vote) {

    }

    public function __construct($hash = null) {
        // if $hash != null load from PARSE
    }
}

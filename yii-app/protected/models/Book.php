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

    public $google_link = null;
    public $title = null;
    public $description = null;
    public $author = null;
    public $category = null;
    
    
    public function save(){
        $parse = new parseRestClient(array(
    'appid' => 'YOUR APPLICATION ID',
    'restkey' => 'YOUR REST KEY ID'
));
    }

}
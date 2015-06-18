<?php

/**
 * Created by PhpStorm.
 * User: minot_000
 * Date: 6/17/2015
 * Time: 1:01 PM
 */
class Article
{
    public $id;
    public $title;
    public $relative_file_location;
    public $publisher_id;
    public $page_reference;

    function __construct()
    {
        $this->id = 1;
        $this->title = 'kushal';
        $this->relative_file_location = 'stack';
        $this->publisher_id = 2;
        $this->page_reference = 3;
    }
}